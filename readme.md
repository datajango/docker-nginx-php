# docker-nginx-php
Simple PHP7 Docker Compose Environment

## Technology included

* [Nginx](http://nginx.org/)
* [MySQL](http://www.mysql.com/)
* [PHP 7](http://php.net/)

## Running

```sh
docker-compose up -d --build --force-recreate
docker-compose ps
docker-compose exec web bash
```