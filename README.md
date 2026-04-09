# Pet Management System

A simple PHP and MySQL CRUD project for managing pet records.

## Overview
This project lets you:
- add a new pet
- view all pets
- edit pet information
- delete a pet record

It uses plain PHP, MySQL and basic CSS.

## Features
- Create pet records
- Read and list saved records
- Update existing records
- Delete records
- Simple database connection setup
- Clean file structure for beginner-level PHP projects

## Technologies Used
- PHP
- MySQL
- HTML
- CSS

## Project Files
- `index.php` — home page
- `add_pet.php` — form to add a new pet
- `insert_pet.php` — saves new pet data to database
- `view_pets.php` — shows all pets
- `edit_pet.php` — form to edit a pet
- `update_pet.php` — updates edited pet data
- `delete_pet.php` — deletes a pet record
- `db.php` — database connection
- `database.sql` — SQL file for manual database setup
- `style.css` — basic styling
- `inert_pet.php` — old mistaken file name kept for compatibility

## Fixed Errors
This repaired version includes these fixes:
- fixed broken form tag
- fixed wrong file naming issue between `inert_pet.php` and `insert_pet.php`
- added missing `owner_name` input field
- added missing core files required for full CRUD flow
- improved database queries with prepared statements
- checked PHP syntax for all files

## Requirements
- XAMPP / WAMP / Laragon or any PHP local server
- PHP 7.4 or later
- MySQL or MariaDB
- Web browser

## How to Run the Project

### Option 1: Using XAMPP
1. Extract the project folder.
2. Copy the folder into `htdocs`.
3. Start **Apache** and **MySQL** from XAMPP.
4. Open **phpMyAdmin**.
5. Create a database named:
   `pet_management_system`
6. Import the `database.sql` file.
7. Open your browser and go to:
   `http://localhost/pet_management_system_fixed/`

### Option 2: Auto-create from `db.php`
This project is also set up to try creating the database and table automatically when it runs.
If that works in your environment, you can just:
1. place the folder in your server directory
2. start Apache and MySQL
3. open the project in your browser

If auto-creation does not work, use the manual SQL import method above.

## Default Database Settings
Inside `db.php`, current settings are:
- host: `localhost`
- username: `root`
- password: empty
- database: `pet_management_system`

If your server uses different credentials, update `db.php`.

## Database Table
The main table stores pet data such as:
- pet name
- pet type
- breed
- age
- owner name

## Notes
- `inert_pet.php` exists because the original project used a mistaken file name.
- The working insert flow now uses `insert_pet.php`.
- You can delete `inert_pet.php` later if you no longer need backward compatibility.

## Troubleshooting
### 1. Database connection failed
Check your MySQL username, password and database name in `db.php`.

### 2. Page not opening
Make sure Apache is running and your project folder path is correct.

### 3. Table not found
Import `database.sql` manually in phpMyAdmin.

### 4. Styles not loading
Check that `style.css` is in the project root folder.

## Author Note
This is a fixed and completed version of the original Pet Management System project, prepared so it can run properly as a full basic CRUD application.
