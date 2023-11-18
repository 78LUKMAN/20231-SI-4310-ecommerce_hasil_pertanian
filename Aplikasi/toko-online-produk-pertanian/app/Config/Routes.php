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
    $routes->get('signin', 'AuthController::signin');
});

// User Activity (cart, history, transaction)
$routes->group('activity', function($routes) {
    $routes->get('cart', 'ActivityController::cart');
    $routes->get('history', 'ActivityController::history');
    $routes->get('transaction', 'ActivityController::transaction');
    $routes->get('checkout','CheckoutController::checkout');

});

// Admin (product, account management, transaction management)
$routes->group('admin', function($routes) {
    $routes->get('/','AdminController::index');
    $routes->get('products','AdminController::products');
});

// Product
$routes->group('product', function($routes) {
    // product detail

    // product search result
});

// Checkout 

