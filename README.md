# SyntraBE EP 2020 (FESTIFAVS)

Hi and welcome to FestiFavs! This application allows you to find all of your favorite festivals in the Netherlands and Belgium and add them to your favorites list!

## Installation steps

To install locally: 

- Clone project
- Run `composer install`
- Configure `.env` file with DB details/info
- Run `php artisan migrate`
- Run `php artisan db:seed --class=FestivalsData`

## Usage steps

After completing these steps you should be able to run a local server by using:

- Run `php artisan serve`

You will be able to register a new user and add festivals to your list. 

