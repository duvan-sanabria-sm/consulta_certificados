<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ============================
// RUTAS PÚBLICAS
// ============================

// Página principal
$routes->get('/', 'User::index');

// Vista del formulario de login personalizado
$routes->get('log-in', 'LoginController::showViewLogin');
$routes->get('login', 'LoginController::showViewLogin');
$routes->get('consulta/(:alpha)','User::ShowCountryQuery/$1', ['as' => 'consult_country']);

$routes->post('certificates_query','User::manageCertificateQuery',['as' => 'cert_query']);

//Registrar cuentas
//$routes->get('registro','RegisterController::registerUser');


// ============================
// RUTAS ADMINISTRATIVAS (agrupadas en /admin)
// ============================

$routes->group('admin', function ($routes) {
    // Mostrar lista de usuarios
    $routes->get('usuarios', 'UserDataController::showList', ['as' => 'users']);

    // Vista de inicio del panel de administrador
    $routes->get('inicio', 'AdminController::showViewHome', ['as' => 'home']);

    // Vista importación de certificados desde archivo
    $routes->post('certificados', 'ExcelController::import', ['as' => 'certificates']);

    // Actualizar datos de usuario
    $routes->post('actualizar', 'UserDataController::updateData', ['as' => 'actualizar']);

    //Descargar certificados
    $routes->post('descarga', 'ExcelController::downoload_report', ['as' => 'informe']);
});



// ============================
// RUTAS DE AUTENTICACIÓN (Shield)
// ============================

// Excluir solo las rutas que vamos a personalizar nosotros (GET /login, GET /register)
service('auth')->routes($routes, [
    'except' => ['login','register']
]);

// Registrar solo la acción de login (POST /login)
$routes->post('login', '\CodeIgniter\Shield\Controllers\LoginController::loginAction');

// ============================
// PERSONALIZACIÓN DE ERRORES
// ============================

// Ruta personalizada para página 404
//$routes->set404Override('ErrorController::show404');
