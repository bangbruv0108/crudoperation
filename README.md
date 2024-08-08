# Basic PHP CRUD Operations

# Overview

This repository contains a basic PHP application for performing CRUD (Create, Read, Update, Delete) operations on a MySQL database. The purpose of this project is to provide a simple example of how to manage data using PHP and MySQL.

# Prerequisites

# Before you begin, ensure you have met the following requirements:

PHP: Version 7.4 or later
MySQL: Version 5.7 or later
Web Server: Apache or Nginx (with PHP support)
Database Tool: phpMyAdmin or MySQL Workbench (optional but recommended)

# Running the Application
Create a Virtual Host: Configure your web server to serve the application. For Apache, create a virtual host or place the application in the htdocs directory.
Access the Application: Open your web browser and navigate to http://localhost/php-crud.
Usage

# Create
To add a new record, navigate to http://localhost/php-crud/create.php and fill out the form. The data will be inserted into the database.

# Read
To view all records, go to http://localhost/php-crud/index.php. This page will list all entries from the database.

# Update
To update a record, go to http://localhost/php-crud/edit.php?id=ID, where ID is the ID of the record you want to edit. Make your changes and submit the form to update the record.

# Delete
To delete a record, go to http://localhost/php-crud/delete.php?id=ID, where ID is the ID of the record you want to delete. Confirm the deletion to remove the record from the database.

# Files

config.php: Contains the database connection settings.
create.php: Form for adding new records.
index.php: Displays a list of all records.
edit.php: Form for editing existing records.
delete.php: Script for deleting records.


