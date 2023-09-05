<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Ruta Retie
$routes->get('retie', 'ServiceController::showView');

//Ruta Productos
$routes->get('productos','ServiceController::showViewProducts');

//Ruta SIG
$routes->get('sig','ServiceController::showViewSIG');