<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Rutas user
$routes->get('/', 'User::index');

//Rutas admin
/*
$routes->group('admin', function($routes) { //1.
    $routes->get('login', 'LoginController::showViewLogin');
    $routes->get('home', 'AdminController::showViewHome');
    $routes->post('envio', 'ExcelController::import');

});*/

$routes->group('admin', function($routes) { //1.
    $routes->get('acceso', 'LoginController::showViewLogin');
    $routes->get('ingreso', 'AdminController::showViewHome');
    $routes->post('importar', 'ExcelController::import');

});

//Rutas usuario
$routes->group('/', function($routes){
    $routes->get('login', 'LoginController::showViewLogin');
    $routes->get('consulta','RequestController::manageCertificateQuery');
});

//Rutas shield
service('auth')->routes($routes);

