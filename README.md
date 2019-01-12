# ShopApp Challenge

The coding challenge is about implementing an app that lists shops nearby.

## Getting started

### Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/AyoubTMT/ShopApp_challange.git

Switch to the repo folder

    cd ShopApp_challange

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Create a symbolic link from public/storage to  storage/app/public

    php artisan storage:link

Run the database migrations (**Create a database in your server and set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/AyoubTMT/ShopApp_challange.git
    cd ShopApp_challange
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan storage:link
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve


### Database seeding

**Populate the database with seed data with relationships which includes users, prefered shops and shops. This can help you to quickly start testing the app and start using it with ready content.**

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh


## Code overview


### Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the controllers
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the routes defined in web.php file
- `tests` - Contains all the application tests

### Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.


### Functional spec

The coding challenge is about implementing an app that lists shops nearby. 

- As a User, I can sign up using my email & password
- As a User, I can sign in using my email & password
- As a User, I can display the list of shops sorted by distance
- As a User, I can like a shop, so it can be added to my preferred shops
  - Acceptance criteria: liked shops shouldn’t be displayed on the main page

- [BONUS] As a User, I can dislike a shop, so it won’t be displayed within “Nearby Shops” list during the next 2 hours
- [BONUS] As a User, I can display the list of preferred shops
- [BONUS] As a User, I can remove a shop from my preferred shops list

### Mockups

![Main Page - 'shop.blade.php' - List of shops neaby my location sorted by distance](/storage/app/public/shops.png)

![My Preferred Shop page - 'preferedShops.blade.php' - List of already preferred shops](/storage/app/public/preferedShops.png)

----------