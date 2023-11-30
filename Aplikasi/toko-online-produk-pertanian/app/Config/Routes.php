<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Routes 


// HOME
$routes->get('/', 'Home::index');

// Auth
$routes->group('auth', function($routes) {
    $routes->get('signup', 'AuthController::signup');
    $routes->post('signup', 'AuthController::signup');
    $routes->get('signin', 'AuthController::signin');
    $routes->post('signin', 'AuthController::signin');
    $routes->get('logout', 'AuthController::logout');
});

// User Activity (cart, history, transaction)

$routes->group('activity', function($routes) {
    $routes->get('cart', 'ActivityController::cart');
    $routes->get('history', 'ActivityController::history');
    $routes->get('transaction', 'ActivityController::transaction');
    $routes->get('profile', 'ProfileController::index');
});

$routes->group('profile', function($routes) {

    $routes->post('update','ProfileController::updatePassword'); // update user password
    $routes->post('edit','ProfileController::edit'); // edit profile info
});

// Admin (product, account management, transaction management)
$routes->group('admin', function($routes) {
    $routes->get('/','AdminController::index');
    $routes->get('products','AdminController::products');
    $routes->get('accounts','AdminController::accounts');
    $routes->post('account/add','AdminController::adduser');
    $routes->get('account/add','AdminController::adduser');
    $routes->post('account/edit','AdminController::edituserpassword');
    $routes->post('account/delete','AdminController::deleteuser');
});

// Product
$routes->group('product', function($routes) {
    // product detail

    // product search result
});

