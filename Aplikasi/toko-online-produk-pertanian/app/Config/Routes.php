<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('signup', 'AuthController::signup');
$routes->get('signin', 'AuthController::signin');

$routes->group('activity', function($routes) {
    $routes->get('cart', 'ActivityController::cart');
    $routes->get('history', 'ActivityController::history');
    $routes->get('transaction', 'ActivityController::transaction');
});



$routes->get('history', 'HistoryController::index');