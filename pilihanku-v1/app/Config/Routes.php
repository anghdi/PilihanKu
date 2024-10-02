<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::indexRegister');
$routes->post('/login', 'AuthController::loginAdmin'); // Route untuk mengirim data login (POST request)
$routes->post('/insertRegister', 'AuthController::insertRegister'); // Route untuk mengirim data Register (POST request)


$routes->get('/', 'MainController::index');