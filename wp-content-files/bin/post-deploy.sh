#!/bin/sh

echo "Starting post deploy script..."
echo "Switching to the wp-content-files directory..."
cd /nas/content/live/mrpobackend/wp-content-files
echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-progress
