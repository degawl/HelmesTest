# Helmes Task - Sectors

Tasks:
1. Correct all of the deficiencies in index.html

2. "Sectors" selectbox:
- 2.1. Add all the entries from the "Sectors" selectbox to database
- 2.2. Compose the "Sectors" selectbox using data from database

3. Perform the following activities after the "Save" button has been pressed: 
- 3.1. Validate all input data (all fields are mandatory)
- 3.2. Store all input data to database (Name, Sectors, Agree to terms)
- 3.3. Refill the form using stored data 
- 3.4. Allow the user to edit his/her own data during the session

Write us Your best code! 

After completing the tasks, please provide us with:
1. Full database dump (structure and data)
2. Source code

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Technologies](#technologies)
- [Improvements](#improvements)

## Installation

```sh
$ git clone https://github.com/degawl/HelmesTest.git
$ cd HelmesTest
Add your environment variables to .env (Example .env file provided)
    DB_DATABASE=*****
    DB_USERNAME=*****
    DB_PASSWORD=*****
$ composer dump-autoload
$ php artisan migrate:fresh
$ php artisan db:seed
$ php artisan serve
```

## Usage

After migrating the database, seeding the sectors table and starting the server you
you can now access the application at your localhost.

Creating a user is required.
After creating a user you may login using either you registered email or username.

All fields in form are mandatory.
You can select up to 5 sectors.

The card on the right (or bottom in low-width view) shows the data currently stored in the db.
To update the data simply resubmit the form with new data.

To run the tests make sure you are in the root directory and run the command
```sh
$ vendor/bin/phpunit
```
## Technologies

- [Laravel 6.0](https://laravel.com/)
- [Select2](https://github.com/ttskch/select2-bootstrap4-theme)

## Improvements

Have the parent/child relationship of the sectors be represented in select-box.


