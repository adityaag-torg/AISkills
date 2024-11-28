<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.pickl.ai/assets/images/pickl-logo.svg" width="400" alt="Pickl Logo"></a></p>


## About Pickl

Pickl.AI began with a passionate team of Data Science enthusiasts who sought to revolutionize personalized learning by harnessing the power of the projects they were working upon

# Getting started

## Installation

Clone the repository

    git clone git@github.com:adityaag-torg/AISkills.git

Switch to the repo folder

    cd laravel-realworld-example-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git clone git@github.com:adityaag-torg/AISkills.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 