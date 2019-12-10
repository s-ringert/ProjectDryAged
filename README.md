# About
* Fun App to decide who is guilty
* [![Build Status](https://travis-ci.org/s-ringert/guilty.svg?branch=master)](https://travis-ci.org/s-ringert/guilty)

# Setup
* clone repo
* copy config dist files
```shell
cp .env.dist .env
cp config/autoload/database.local.php.dist config/autoload/database.local.php
cp config/autoload/development.local.php.dist config/autoload/development.local.php      
```
* composer install
```shell
sudo docker-compose run docker-php-fpm composer install
```
                            
* set rw on cache dir                        
```shell
chmod -R 777 data/cache
```
* init db
```shell
sudo docker-compose run docker-php-fpm composer doctrine help orm:schema-tool:create
```

* start application
```shell
sudo docker-compose up
```

# Helpful commands
## Start Application
```shell
sudo docker-compose up
```
## Run Composer
```shell
sudo docker-compose run docker-php-fpm composer
```
## Run CI check
```shell
sudo docker-compose run docker-php-fpm composer check
```

## Run Doctrine
```shell
sudo docker-compose run docker-php-fpm composer doctrine
sudo docker-compose run docker-php-fpm composer doctrine orm:generate:entities src
sudo docker-compose run docker-php-fpm composer doctrine orm:schema-tool:create
```

## Run PHP CLI in PHP-FPM
```shell
 sudo docker-compose run docker-php-fpm php public/createProduct.php product7
```

## Clear Caches
```shell
sudo docker-compose run docker-php-fpm composer clear-all-cache
```
