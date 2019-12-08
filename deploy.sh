sudo docker-compose down
git pull
sudo docker-compose run docker-php-fpm composer install
sudo docker-compose run docker-php-fpm composer doctrine orm:schema-tool:update --force --dump-sql
sudo docker-compose up -d