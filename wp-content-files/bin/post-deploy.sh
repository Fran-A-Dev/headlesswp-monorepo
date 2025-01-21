#!/bin/sh

echo "Starting post deploy script..."
echo "Switching to the correct directory..."
cd /nas/content/live/mrpobackend/wp-content-files
echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-progress
