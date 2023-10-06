<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('signup', 'AuthController::signup');
$routes->get('signin', 'AuthController::signin');
$routes->get('cart', 'CartController::cart');
$routes->get('history', 'HistoryController::index');