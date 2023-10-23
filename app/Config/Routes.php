<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'User::index');


$routes->set404Override('ErrorController::miError404');


$routes->group('admin', function($routes) { //1.
    $routes->get('editar', 'UserDataController::showList');
    $routes->get('ingreso', 'AdminController::showViewHome');
    $routes->post('importar', 'ExcelController::import');
    $routes->post('modificar','UserDataController::updateData');
});

//Rutas usuario
$routes->group('/', function($routes){
    $routes->get('consulta','RequestController::manageCertificateQuery');
});

//Rutas shield
service('auth')->routes($routes,['except' => ['register']]);




