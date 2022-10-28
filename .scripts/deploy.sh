#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git pull origin production

# Install composer dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# cache flush -  hogy ne forduljon elő hogy a változtatások 'beragadnak'..
php artisan clear-compiled

# Cache flush
php artisan optimize

# Compile npm assets
npm run prod

# Run database migrations
php artisan migrate --force

# Exit maintenance mode
php artisan up

echo "Deployment finished!"