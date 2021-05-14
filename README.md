<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

</p>

## GIF browsing app
This system helps you to perform a keyword search against API and display GIF results, you should register and login at first. 


</p>

## Working steps

Below you can find all working steps headlines:

- create new project:

laravel new testProj

- Create GIF controller:

php artisan make:controller Gif

- Create GIF API Model/Controller/Migration:

php artisan make:model GifApi -a

- Create resource collection RESTFULL APIs:

php artisan make:resource GifCollection

- Install required packages:

composer require laravel/ui

composer require laravel/legacy-factories


- Prepair UI and DB:

php artisan ui vue --auth

php artisan ui bootstrap --auth

php artisan ui bootstrap

npm install && npm run dev

php artisan migrate

php artisan db:seed


</p>

## Setup system on your machine steps:

- download all files then uncompress folders.

- use the command "composer install" to download required packages.

- copy .env.example and name it .env

- create the needed database then update .env file to fill the below information:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=gifapptest

DB_USERNAME=root

DB_PASSWORD=


- run the below DB commands:

php artisan migrate

php artisan db:seed


- you should deloy using two ports, the first one for website and the second for APIs:

	php artisan serve --port 8000
	
	php artisan serve --port 8001

- now you can visit:

web app:

http://localhost:8000/gif

http://localhost:8000/api/gif?gif-key=cat

- You can test function using phpunit using the command:

./vendor/bin/phpunit

- there are some fake data to test project, you can insert into database using the command:

php artisan db:seed


</p>

## Future works could be done:

- Integration system with Algolia for AI-powered search & discovery and auto-complete.

- using passport for APIs as a middleware.
