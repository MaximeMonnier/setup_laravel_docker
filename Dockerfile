# Utilisation de l'image de base PHP avec PHP-FPM
FROM php:8.1-fpm

# Installation des dépendances
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libxml2-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

# Configuration de l'extension GD avec des options pour Freetype et JPEG
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

# Installation des extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Répertoire de travail
WORKDIR /var/www

# Copie du code source de l'application
COPY . /var/www

# Attribution des permissions
RUN chown -R www-data:www-data /var/www

# Exposition du port 9000
EXPOSE 9000

# Lancement de PHP-FPM
CMD ["php-fpm"]
