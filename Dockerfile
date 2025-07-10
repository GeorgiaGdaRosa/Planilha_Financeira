# Usa uma imagem base oficial do PHP com Apache
FROM php:8.2-apache

# Instala extensões do PHP necessárias (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita módulos do Apache (opcional)
RUN a2enmod rewrite

# Corrige permissões para o Apache ler os arquivos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Exponha a porta 80 para acesso web
EXPOSE 80

