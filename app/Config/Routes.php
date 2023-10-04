<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Rutas user
//routes->get('/', 'User::index');

//Rutas admin
/*
$routes->group('admin', function($routes) { //1.
    $routes->get('login', 'LoginController::showViewLogin');
    $routes->get('home', 'AdminController::showViewHome');
    $routes->post('envio', 'ExcelController::import');

});*/



//Rutas shield
service('auth')->routes($routes);

