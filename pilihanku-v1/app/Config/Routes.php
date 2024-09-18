<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/admin', 'AuthController::index');


// Users
$routes->get('/', 'AuthController::registerUser');
