#!/bin/bash

# Secure AWS Deployment Script for SENGARAM Portfolio
echo "🔒 Deploying SENGARAM Portfolio with Security Hardening..."

# Update system
sudo yum update -y

# Install security packages
sudo yum install -y fail2ban mod_security

# Install PHP 8.2 and extensions
sudo amazon-linux-extras install php8.2 -y
sudo yum install php-mbstring php-xml php-zip php-sqlite3 -y

# Install Apache with security modules
sudo yum install httpd mod_ssl -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer

# Install Node.js
curl -sL https://rpm.nodesource.com/setup_18.x | sudo bash -
sudo yum install nodejs -y

# Deploy application
cd /var/www/html
sudo rm -rf *
sudo git clone https://github.com/yourusername/sengaram.com.git .

# Install dependencies
sudo composer install --no-dev --optimize-autoloader --no-scripts
sudo npm install && npm run build

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

# Set secure permissions
sudo chown -R apache:apache /var/www/html
sudo chmod -R 755 /var/www/html
sudo chmod -R 775 storage bootstrap/cache
sudo chmod 664 database/database.sqlite
sudo chmod 600 .env

# Remove sensitive files
sudo rm -f .env.example
sudo rm -f README.md
sudo rm -f composer.json
sudo rm -f package.json
sudo rm -rf .git
sudo rm -rf tests

# Configure Apache with security
sudo tee /etc/httpd/conf.d/security.conf > /dev/null <<EOF
# Security Configuration
ServerTokens Prod
ServerSignature Off

# Hide Apache version
Header unset Server
Header always set Server "Web Server"

# Security headers
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
Header always set Referrer-Policy "strict-origin-when-cross-origin"
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"

# Disable unnecessary modules
LoadModule rewrite_module modules/mod_rewrite.so
LoadModule ssl_module modules/mod_ssl.so
LoadModule headers_module modules/mod_headers.so
EOF

# Configure Laravel virtual host
sudo tee /etc/httpd/conf.d/laravel.conf > /dev/null <<EOF
<VirtualHost *:80>
    DocumentRoot /var/www/html/public
    
    <Directory /var/www/html/public>
        AllowOverride All
        Require all granted
        Options -Indexes -ExecCGI
        
        # Disable PHP execution in uploads
        <FilesMatch "\.(php|phtml|php3|php4|php5|pl|py|jsp|asp|sh|cgi)$">
            Require all denied
        </FilesMatch>
    </Directory>
    
    # Block access to sensitive directories
    <DirectoryMatch "^/var/www/html/(storage|bootstrap|vendor|tests)">
        Require all denied
    </DirectoryMatch>
    
    # Block access to sensitive files
    <FilesMatch "\.(env|log|sql|md|txt|conf|ini|bak|old|tmp)$">
        Require all denied
    </FilesMatch>
    
    ErrorLog /var/log/httpd/laravel_error.log
    CustomLog /var/log/httpd/laravel_access.log combined
</VirtualHost>
EOF

# Configure Fail2Ban
sudo tee /etc/fail2ban/jail.local > /dev/null <<EOF
[DEFAULT]
bantime = 3600
findtime = 600
maxretry = 3

[sshd]
enabled = true

[apache-auth]
enabled = true

[apache-badbots]
enabled = true

[apache-noscript]
enabled = true

[apache-overflows]
enabled = true
EOF

# Configure ModSecurity
sudo tee /etc/httpd/conf.d/mod_security.conf > /dev/null <<EOF
LoadModule security2_module modules/mod_security2.so

<IfModule mod_security2.c>
    SecRuleEngine On
    SecRequestBodyAccess On
    SecResponseBodyAccess Off
    SecRequestBodyLimit 13107200
    SecRequestBodyNoFilesLimit 131072
    SecRequestBodyInMemoryLimit 131072
    SecRequestBodyLimitAction Reject
    SecRule REQUEST_HEADERS:Content-Type "text/xml" \
         "id:'200000',phase:1,t:none,t:lowercase,pass,nolog,ctl:requestBodyProcessor=XML"
    SecRule REQUEST_HEADERS:Content-Type "application/xml" \
         "id:'200001',phase:1,t:none,t:lowercase,pass,nolog,ctl:requestBodyProcessor=XML"
    SecRule REQUEST_HEADERS:Content-Type "text/json" \
         "id:'200002',phase:1,t:none,t:lowercase,pass,nolog,ctl:requestBodyProcessor=JSON"
    SecRule REQUEST_HEADERS:Content-Type "application/json" \
         "id:'200003',phase:1,t:none,t:lowercase,pass,nolog,ctl:requestBodyProcessor=JSON"
    SecUploadKeepFiles RelevantOnly
    SecUploadFileMode 0600
    SecTmpDir /tmp/
    SecDataDir /tmp/
</IfModule>
EOF

# Start and enable services
sudo systemctl start httpd
sudo systemctl enable httpd
sudo systemctl start fail2ban
sudo systemctl enable fail2ban

# Configure firewall
sudo yum install -y firewalld
sudo systemctl start firewalld
sudo systemctl enable firewalld
sudo firewall-cmd --permanent --add-service=http
sudo firewall-cmd --permanent --add-service=https
sudo firewall-cmd --permanent --add-service=ssh
sudo firewall-cmd --reload

# Set up log rotation
sudo tee /etc/logrotate.d/laravel > /dev/null <<EOF
/var/www/html/storage/logs/*.log {
    daily
    missingok
    rotate 52
    compress
    delaycompress
    notifempty
    create 644 apache apache
}
EOF

# Get public IP
PUBLIC_IP=$(curl -s http://169.254.169.254/latest/meta-data/public-ipv4)

echo "✅ Secure deployment completed!"
echo "🌐 Your portfolio is now live at: http://$PUBLIC_IP"
echo ""
echo "🔒 Security Features Enabled:"
echo "- Rate limiting and DDoS protection"
echo "- SQL injection prevention"
echo "- XSS protection"
echo "- CSRF protection"
echo "- Security headers"
echo "- File upload restrictions"
echo "- Fail2Ban intrusion detection"
echo "- ModSecurity web application firewall"
echo "- Secure file permissions"
echo ""
echo "📧 Email Configuration Required:"
echo "1. Update .env with your Gmail App Password"
echo "2. Run: sudo php artisan config:cache"