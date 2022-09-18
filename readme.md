This repo is an example of how to use the express-router PHP package, the simplest and easiest way to deal with routes in PHP

Express Router package:
https://packagist.org/packages/wilsonneto-dev/express-router

How to run the project:
```bash
// install the dependencies (with composer)
composer install

// use a docker image with rewrite enabled to run the project
docker run -d -p 3082:80 --name php-with-rewrite2 -v "$PWD":/var/www/html wilsonnetowork/php-rewrite:1
```
