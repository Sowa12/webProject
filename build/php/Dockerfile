# В данном файле используется технология multistage building
# https://docs.docker.com/develop/develop-images/multistage-build/
# Образ builder используется для построения проекта.
# Он вынесен в отдельный контейнер, чтобы ускорить общий билд проекта после изменений исходного кода
FROM php:7.4-fpm-alpine as builder

# Устанавливаем рабочую папку
WORKDIR /var/www

# Установка nodejs
RUN apk add --no-cache --virtual .build-deps nodejs npm

# Установка composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

# Мы устанавливаем зависимости отдельно от исходного кода, т.к. они как правило редко меняются и при изменении
# исходного кода они будут подтягиваться из кеша докера.
COPY ./src/composer.json ./src/composer.lock ./src/package.json ./src/package-lock.json /var/www/
RUN composer install --no-autoloader --no-dev --ignore-platform-reqs && npm ci

# Переносим исходный код приложения в builder, генерируем php autoload, собираем ассеты.
# После сборки мы можем удалить node_modules, чтобы уменьшить размер конечного образа.
COPY ./src/ /var/www/
RUN composer dump-autoload && npm run prod && rm -rf /var/www/node_modules

#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
# Этот образ мы будем пушить в Hub
FROM php:7.4-fpm-alpine

# Устанавливаем рабочую папку
WORKDIR /var/www

# Установка зависимостей laravel и часто используемых инструментов (оптимизаторы изображений, например)
RUN apk add --no-cache --virtual .build-deps  \
    zlib-dev \
    libjpeg-turbo-dev \
    libpng-dev \
	pngquant \
	jpegoptim \
	gifsicle \
	optipng \
	libwebp-tools \
    libxml2-dev \
    bzip2-dev \
    libzip-dev \
    mysql-client

# Установка зависимостей laravel, включение модулей php, установка redis
RUN docker-php-ext-configure zip
RUN pecl install redis && docker-php-ext-enable redis
RUN docker-php-ext-configure gd #--with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install pdo pdo_mysql exif pcntl zip gd

# Установка composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

# Настройка расписания laravel (выполнение запланированных периодических задач)
RUN crontab -l | { cat; echo "* * * * * cd /var/www && php artisan schedule:run >> /dev/null 2>&1"; } | crontab -

# Копируем из образа билдера наш собранный проект
COPY --from=builder /var/www /var/www/

# Устанавливаем все права на запись и чтение для папки проекта, чтобы избежать ошибок PermissionDenied
RUN chmod 777 -R /var/www

RUN php artisan storage:link

# https://laravel.com/docs/8.x/deployment#optimization
# RUN php artisan config:cache
# RUN php artisan route:cache
# RUN php artisan view:cache

# Стартовая точка контейнера
ENTRYPOINT ["php-fpm"]
