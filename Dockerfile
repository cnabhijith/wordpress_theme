FROM wordpress:php8.3-apache

# Copy your custom theme into WordPress themes directory
COPY ./indostic-fse /var/www/html/wp-content/themes/indostic-fse

# Optional: activate the theme using WP-CLI if needed
# RUN docker-php-ext-install mysqli && \
#     curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
#     chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp && \
#     wp theme activate indostic-fse --allow-root --path=/var/www/html

EXPOSE 80