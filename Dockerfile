FROM php:8.2-fpm

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Limpa o cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala extensões do PHP essenciais para o Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala o Composer vindo da imagem oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho dentro do contêiner
WORKDIR /var/www

# Copia os arquivos do seu projeto para dentro do contêiner
COPY . /var/www

# Ajusta as permissões para o Laravel conseguir escrever nos logs e cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
