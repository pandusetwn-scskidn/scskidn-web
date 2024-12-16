# # Gunakan image PHP dengan Apache dari Docker Hub
# FROM php:8.2-apache

# # Salin file proyek ke direktori web server container
# COPY src/ /var/www/html/
# # COPY . /var/www/html/

# # Pasang ekstensi PHP tambahan jika diperlukan
# RUN docker-php-ext-install mysqli

# # Expose port 80
# EXPOSE 8080

# # Start the server
# CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]

# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Salin file kode aplikasi ke dalam container
COPY src/ /var/www/html/

# Install ekstensi PHP tambahan jika diperlukan
RUN docker-php-ext-install mysqli

# Set port 8080 agar sesuai dengan Cloud Run
EXPOSE 8080

# Pastikan Apache mendengar di port dari variabel PORT
# CMD ["apache2-foreground"]
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/var/www/html"]