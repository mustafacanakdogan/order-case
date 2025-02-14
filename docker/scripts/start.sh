#!/bin/bash
# docker/scripts/start.sh

# Wait for MySQL to be ready
echo "Waiting for MySQL to be ready..."
while ! nc -z mysql 3306; do
    sleep 1
done

cd /var/www

# Install dependencies if vendor directory doesn't exist
if [ ! -d "vendor" ]; then
    echo "Installing Composer dependencies..."
    composer install --no-interaction
fi

# Install NPM packages if node_modules doesn't exist
if [ ! -d "node_modules" ]; then
    echo "Installing NPM packages..."
    npm install
    npm run build
fi

# Generate application key if not exists
if [ ! -f ".env" ]; then
    cp .env.example .env
    php artisan key:generate
fi

# Create necessary Laravel tables and run migrations
echo "Setting up database..."
php artisan session:table
php artisan queue:table
php artisan migrate --force

# Cache configuration and routes
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions if needed
chmod -R 777 storage bootstrap/cache

# Start Laravel Queue Worker via Supervisor
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

# Start PHP-FPM
php-fpm
