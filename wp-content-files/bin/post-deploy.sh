#!/bin/sh

echo "Starting post deploy script..."
echo "Switching to the parent directory..."
cd ..
echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev --no-progress
