# Local Farm Products Online Store - Pekalongan Groceria
## Description
A web-based digital platform specifically designed to facilitate online buying and selling of local agricultural products. This platform provides various types of agricultural products such as vegetables, fruits, grains and other processed products. 

## Installation
- Clone the repository
- Config .env file (server, database name, port, username, password)
- Install the dependencies (composer install)

## How To Run
- Run project : php spark serve

## Database Migration 
- Create database
- Run php spark migrate
- Run php spark db:seed Users

## Note
If you have an error like "ErrorException
Attempt to read property "xxxxxxxxxx" on null" or similar, do :

- move the app/public/cacert.pem file to your php installation folder
- edit the php.ini file and look for the line curl.cainfo="" then enter the path of the cacert.pem file earlier.
- restart the server and reload the page

