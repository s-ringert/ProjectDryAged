sudo docker-compose down
git pull
sudo docker-compose run docker-php-fpm composer install
sudo docker-compose up -d