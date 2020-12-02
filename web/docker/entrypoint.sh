#!/usr/bin/env sh
mkdir -p var/cache var/log vendor
composer install --no-interaction $COMPOSER_ARGS
chown -R www-data var

exec "$@"
