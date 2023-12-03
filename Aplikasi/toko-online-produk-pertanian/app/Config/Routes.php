<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Routes 


// HOME
$routes->get('/', 'Home::index');

// Auth
$routes->group('auth', function ($routes) {
    $routes->get('signup', 'AuthController::signup');
    $routes->post('signup', 'AuthController::signup');
    $routes->get('signin', 'AuthController::signin');
    $routes->post('signin', 'AuthController::signin');
    $routes->get('logout', 'AuthController::logout');
});

// User Activity (cart, history, transaction)

$routes->group('activity', function ($routes) {
    $routes->get('cart', 'CartController::cart', ['filter' => 'auth']);
    $routes->get('profile', 'ProfileController::index', ['filter' => 'auth']);
    $routes->get('history', 'HistoryController::history', ['filter' => 'auth']);
    $routes->get('checkout', 'CheckoutController::checkout', ['filter' => 'auth']);
    $routes->get('transaction', 'ActivityController::transaction', ['filter' => 'auth']);
    $routes->post('search', 'SearchController::search');
});

$routes->group('profile', function ($routes) {

    $routes->post('update', 'ProfileController::updatePassword', ['filter' => 'auth']); // update user password
    $routes->post('edit', 'ProfileController::edit', ['filter' => 'auth']); // edit profile info
});

// Admin (product, account management, transaction management)
$routes->group('admin', function ($routes) {
    $routes->get('/', 'AdminController::index', ['filter' => 'auth']);
    $routes->get('products', 'ProductController::products', ['filter' => 'auth']);
    $routes->post('product/add', 'ProductController::addproduct', ['filter' => 'auth']);
    $routes->post('product/delete/(:any)', 'ProductController::deleteproduct/$1', ['filter' => 'auth']);
    $routes->get('product/delete/(:any)', 'ProductController::deleteproduct/$1', ['filter' => 'auth']);
    $routes->post('product/edit/(:any)', 'ProductController::editproduct/$1', ['filter' => 'auth']);
    $routes->get('accounts', 'AdminController::accounts', ['filter' => 'auth']);
    $routes->post('account/add', 'AdminController::adduser', ['filter' => 'auth']);
    $routes->post('account/edit/(:num)', 'AdminController::edituser/$1', ['filter' => 'auth']);
    $routes->post('account/delete/(:num)', 'AdminController::deleteuser/$1', ['filter' => 'auth']);
    $routes->get('transaction', 'AdminController::showAllUsersHistory');
    $routes->post('transaction/editStatus/(:num)', 'AdminController::editStatus/$1');
});

// Product
$routes->group('product', function ($routes) {
    $routes->get('detail/(:num)', 'ProductController::detailproduct/$1');
    $routes->get('showall/(:any)', 'ProductController::showByLabel/$1');
});


// cart
$routes->group('cart', function ($routes) {
    $routes->post('add', 'CartController::add', ['filter' => 'auth']);
    $routes->get('delete/(:any)', 'CartController::delete/$1', ['filter' => 'auth']);
    $routes->add('edit', 'CartController::edit', ['filter' => 'auth']);
    $routes->add('clear', 'CartController::clear', ['filter' => 'auth']);
    $routes->get('checkout', 'CartController::checkout', ['filter' => 'auth']);
    $routes->get('getcity', 'CartController::getCity', ['filter' => 'auth']);
    $routes->get('getcost', 'CartController::getCost', ['filter' => 'auth']);
    $routes->add('buy', 'CartController::buy', ['filter' => 'auth']);
});
