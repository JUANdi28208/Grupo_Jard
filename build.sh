#!/bin/bash

# Instalar dependencias
composer install --no-dev --optimize-autoloader

# Optimizar Laravel
php artisan optimize:clear
php artisan optimize
php artisan route:cache
php artisan view:cache