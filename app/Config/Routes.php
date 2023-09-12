<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Rutas Admin
$routes->get('ingreso', 'LoginController::showViewLogin');

$routes->get('home','AdminController::showViewMain');

$routes->post('envio', 'ExcelController::import');

//Rutas Post Admin
$routes->get('consulta','RequestController::manageCertificateQuery');

service('auth')->routes($routes);

