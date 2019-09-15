# PHP Sample

Basic Laravel application with a couple routes that performs SSR in the old request-response format

## Install

Use Laradock as an environment
><https://laradock.io/getting-started/>

Structure should look like:

* laradock
* php-sample

Change the `.env` file
>APP_CODE_PATH_HOST=../php-sample/

Boot up the docker env
> docker-compose up -d nginx mysql phpmyadmin redis workspace

Login to the workspace
> docker-compose exec workspace bash

Run the composer command
> composer install

*Note: These directions are untested*
