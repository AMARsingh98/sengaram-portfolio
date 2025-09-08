#!/bin/bash

# AWS EC2 Deployment Script for SENGARAM Portfolio
echo "🚀 Deploying SENGARAM Portfolio to AWS EC2..."

# Update system
sudo yum update -y

# Install PHP 8.2 and extensions
sudo amazon-linux-extras install php8.2 -y
sudo yum install php-mbstring php-xml php-zip php-sqlite3 -y

# Install Apache
sudo yum install httpd -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer

# Install Node.js (for building assets)
curl -sL https://rpm.nodesource.com/setup_18.x | sudo bash -
sudo yum install nodejs -y

# Clone repository (replace with your repo URL)
cd /var/www/html
sudo rm -rf *
sudo git clone https://github.com/yourusername/sengaram.com.git .

# Install PHP dependencies
sudo composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
sudo npm install
sudo npm run build

# Set up environment
sudo cp .env.production .env

# Generate application key
sudo php artisan key:generate

# Create SQLite database
sudo touch database/database.sqlite
sudo chmod 664 database/database.sqlite

# Run migrations
sudo php artisan migrate --force

# Cache configuration
sudo php artisan config:cache
sudo php artisan route:cache
sudo php artisan view:cache

# Set permissions
sudo chown -R apache:apache /var/www/html
sudo chmod -R 755 /var/www/html
sudo chmod -R 775 storage bootstrap/cache
sudo chmod 664 database/database.sqlite

# Configure Apache
sudo tee /etc/httpd/conf.d/laravel.conf > /dev/null <<EOF
<VirtualHost *:80>
    DocumentRoot /var/www/html/public
    
    <Directory /var/www/html/public>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog /var/log/httpd/laravel_error.log
    CustomLog /var/log/httpd/laravel_access.log combined
</VirtualHost>
EOF

# Start and enable Apache
sudo systemctl start httpd
sudo systemctl enable httpd

# Get public IP
PUBLIC_IP=$(curl -s http://169.254.169.254/latest/meta-data/public-ipv4)

echo "✅ Deployment completed!"
echo "🌐 Your portfolio is now live at: http://$PUBLIC_IP"
echo ""
echo "📧 Email Configuration Required:"
echo "1. Enable 2-factor authentication on your Gmail account"
echo "2. Generate an App Password for Gmail"
echo "3. Update .env file with your App Password"
echo ""
echo "To update email settings:"
echo "sudo nano /var/www/html/.env"
echo "Then update MAIL_PASSWORD with your Gmail App Password"
echo "sudo php artisan config:cache"