# REST API SLIM PHP

Example of REST API with Slim PHP micro framework.


[![Build Status](https://travis-ci.org/maurobonfietti/api-rest-slimphp.svg?branch=master)](https://travis-ci.org/maurobonfietti/api-rest-slimphp)
[![Test Coverage](https://codeclimate.com/github/maurobonfietti/api-rest-slimphp/badges/coverage.svg)](https://codeclimate.com/github/maurobonfietti/api-rest-slimphp/coverage)
[![Code Quality](https://scrutinizer-ci.com/g/maurobonfietti/api-rest-slimphp/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/maurobonfietti/api-rest-slimphp/?branch=master)


## INSTALLATION:

### 1- Download the project:

```bash
$ cd path-to-your-projects
$ git clone https://github.com/maurobonfietti/api-rest-slimphp.git
$ cd api-rest-slimphp
$ cp .env.example .env
$ composer install
```


### 2- Create new MySQL database. For example: "api_rest_slimphp".

From the command line run:

```bash
mysql -e 'CREATE DATABASE api_rest_slimphp;'
```


### 3- Create the structure and load test data into the database.

The database can be updated manually using the following file: [database.sql](app/data/database.sql).

It can also be run from the command line:

```
mysql api_rest_slimphp < app/data/database.sql
```


### 4- Configure the connection data with MySQL.

Edit and complete configuration file: `.env`. For example:

```
DB_HOSTNAME = '127.0.0.1'
DB_DATABASE = 'api_rest_slimphp'
DB_USERNAME = 'root'
DB_PASSWORD = ''
```


## LOCAL SERVER:

You can start the PHP internal web server by running:

```bash
$ composer start
```


### NOTE:

If everything went well :sunglasses:, you can access the project locally by entering:
[Help](http://localhost:8080), 
[Users](http://localhost:8080/api/v1/users), 
[Tasks](http://localhost:8080/api/v1/tasks).

The `composer start` command would be the equivalent to execute:

```bash
$ php -S 0.0.0.0:8080 -t public public/index.php
```


## TESTS:

Access the project route and run the tests with `phpunit`.

```bash
PHPUnit 6.5.8 by Sebastian Bergmann and contributors.

................................                                  32 / 32 (100%)

Time: 212 ms, Memory: 8.00MB

OK (32 tests, 138 assertions)
```


## DOCUMENTATION:

### HELP AND DOCS:

For more information on how to use the REST API, see the following document: [User's Manual](DOC.md).


### IMPORT WITH POSTMAN:

All the information of the API, prepared to download and use as postman collection: [Import Collection](https://www.getpostman.com/collections/b8493a923ab81ef53ebb).
