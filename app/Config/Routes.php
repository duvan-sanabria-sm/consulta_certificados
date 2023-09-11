<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Rutas Admin
$routes->get('ingreso', 'LoginController::showViewLogin');

$routes->get('home','AdminController::showViewMain');


service('auth')->routes($routes);

