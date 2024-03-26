# Local Farm Products Online Store - Pekalongan Groceria
## Description
A web-based digital platform specifically designed to facilitate online buying and selling of local agricultural products. This platform provides various types of agricultural products such as vegetables, fruits, grains and other processed products. 

## Installation
- Clone the repository
- Config .env file (server, database name, port, username, password)
- Add this line in env:
  - MIDTRANS_CLIENT = your_midtrans_client_api_key
  - MIDTRANS_SERVER = your_midtrans_serve_api_key
  - RAJA_ONGKIR_KEY = your_raja_ongkir_api_key
- Install the dependencies (composer install)

## Database Migration 
- Create database
- Run php spark migrate
- Run php spark db:seed Users
  
## How To Run
- Run project : php spark serve

## Note
If you have an error like "ErrorException
Attempt to read property "xxxxxxxxxx" on null" or similar, do :

- move the app/public/cacert.pem file to your php installation folder
- edit the php.ini file and look for the line curl.cainfo="" then enter the path of the cacert.pem file earlier.
- restart the server and reload the page

