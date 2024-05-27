
# استخدام صورة PHP الأساسية مع Apache
FROM php:8.0-apache

# تثبيت المتطلبات الأساسية
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    && curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ محتويات المشروع
COPY . /var/www/html

WORKDIR /var/www/html

# تثبيت حزم PHP و npm
RUN composer install
RUN npm install
RUN npm run build

# تشغيل الترحيلات
RUN php artisan migrate --force

# تعريض المنفذ 80
EXPOSE 80

# أمر تشغيل التطبيق
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
