FROM php:7.3.25-fpm-alpine

WORKDIR /srv/web

RUN apk --update add --no-cache \
		freetype-dev \
		icu-dev \
		libjpeg-turbo-dev \
		libpng-dev \
		libzip-dev \
		libxml2-dev \
		patch \
		supervisor \
	&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
	&& docker-php-ext-configure zip --with-libzip \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) intl pdo_mysql gd opcache zip \
	&& rm -rf /tmp/* /var/tmp/*

COPY ./docker/php.ini /usr/local/etc/php/
COPY ./docker/entrypoint.sh /usr/local/bin/
COPY ./docker/supervisord.conf /etc/supervisord.conf

COPY . .

ENV COMPOSER_ARGS='--no-dev --optimize-autoloader'

ENTRYPOINT ["entrypoint.sh"]
CMD ["supervisord", "-c", "/etc/supervisord.conf"]
