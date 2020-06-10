# SyntraBE EP 2020 (FESTIFAVS)

Hi and welcome to FestiFavs! This application allows you to find all of your favorite festivals in the Netherlands and Belgium and add them to your favorites list!

## Installation steps

To install locally: 

- Clone project
- Run `composer install`
- Change DB_ info in `.env`
- Change MAIL_ info in `.env`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `composer dump-autoload`


## Usage steps

After completing these steps you should be able to run a local server by using:

- Run `php artisan serve`

You will be able to register a new user and add festivals to your list.

## Voyager usage

This project uses voyager as admin interface.

To create a NEW admin user:

- Run `php artisan voyager:admin your@email.com --create`

You will be prompted for the users name and password.

check out voyagers documentation! 
https://voyager-docs.devdojo.com/getting-started/what-is-voyager

