#!/usr/bin/env bash
set -e

echo "Preparing Laravel application..."

mkdir -p storage/logs bootstrap/cache database
chmod -R 775 storage bootstrap/cache database
chown -R www-data:www-data storage bootstrap/cache database || true

touch database/database.sqlite

if [ ! -f .env ]; then
    cp .env.example .env
fi

if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "base64:" ]; then
    php artisan key:generate --force
fi

php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
php artisan storage:link --force

echo "Starting Apache..."
exec apache2-foreground
