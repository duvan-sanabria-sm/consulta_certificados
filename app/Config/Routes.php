<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ============================
// RUTAS PÚBLICAS
// ============================

//VISTAS
$routes->get('/', 'User::index');                                                               // Consultas principales
$routes->get('log-in', 'LoginController::showViewLogin', ['as' => 'login']);                    // Formulario de ingreso
$routes->get('consulta/(:alpha)','User::ShowCountryQuery/$1', ['as' => 'consult_country']);     // Consultas por pais


//SOLICITUDES POST
$routes->post('certificates_query','User::manageCertificateQuery',['as' => 'cert_query']);

// ============================
// RUTAS ADMINISTRATIVAS (agrupadas en /admin)
// ============================
$routes->group('admin', function ($routes) {

    //VISTAS
    $routes->get('usuarios', 'UserDataController::showList', ['as' => 'users']);             // Editar usuarios
    $routes->get('inicio', 'AdminController::showViewHome', ['as' => 'home']);               // Panel del administrador
    $routes->get('crear', 'AdminUserController::create', ['as' => 'create-user']);          // Crear usuarios

    //Solicitudes POST
    $routes->post('certificados', 'ExcelController::import', ['as' => 'certificates']);     // Importación de certificados
    $routes->post('actualizar', 'UserDataController::updateData', ['as' => 'actualizar']);  // Actualizar usuarios
    $routes->post('descarga', 'ExcelController::downoload_report', ['as' => 'informe']);    // Descargar reportes
    $routes->post('create', 'AdminUserController::store', ['as' => 'create']);              // Crear usuarios
});

// ============================
// RUTAS DE AUTENTICACIÓN (Shield)
// ============================
service('auth')->routes($routes, ['except' => ['login','register']]);                       // Excluir solo las rutas que vamos a personalizar nosotros (GET /login, GET /register)
$routes->post('log-in', '\CodeIgniter\Shield\Controllers\LoginController::loginAction');   // Registrar solo la acción de login (POST /login)


// ============================
// PERSONALIZACIÓN DE ERRORES
// ============================

// Ruta personalizada para página 404
$routes->set404Override('ErrorController::show404');
