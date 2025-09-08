#!/bin/bash

# AWS EC2 Deployment Script for SENGARAM Portfolio

echo "🚀 Starting deployment..."

# Update system packages
sudo apt update && sudo apt upgrade -y

# Install required packages
sudo apt install -y nginx php8.2 php8.2-fpm php8.2-mysql php8.2-xml php8.2-mbstring php8.2-curl php8.2-zip php8.2-gd php8.2-sqlite3 unzip curl

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js and npm
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt-get install -y nodejs

# Create web directory
sudo mkdir -p /var/www/sengaram.com
sudo chown -R $USER:www-data /var/www/sengaram.com

# Set proper permissions
sudo chmod -R 755 /var/www/sengaram.com
sudo chmod -R 775 /var/www/sengaram.com/storage
sudo chmod -R 775 /var/www/sengaram.com/bootstrap/cache

echo "✅ Server setup complete!"