# Laravel 5.7 Online Presence
> Real time data update using laravel, vue, laravel broadcasting , echo 

## Build Setup

``` bash
# clone the project
git clone git@github.com:yamin27/OnlinePresence.git

# Nevigate to project and run
sudo cp .env.example .env

# setup database and configure your mail server at .env file 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

# now install composer 
composer install

# Database migration and seeding 
php artisan migrate --seed

# run the project
npm run watch
php artisan serve


# goto browser and hit 
127.0.0.1:8000

Login into 2 different browser with 2 new user. 
