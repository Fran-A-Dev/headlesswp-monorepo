#!/bin/sh

echo "Starting post deploy script..."
echo "Switch directory to wp-content/"
cd wp-content-files
echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-progress