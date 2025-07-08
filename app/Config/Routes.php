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

// Procesar logout (solo POST por seguridad)
$routes->post('log-out', 'AdminController::logout');

// Consulta pública de certificados
$routes->get('consulta', 'RequestController::manageCertificateQuery');

//Registrar cuentas
//$routes->get('registro','RegisterController::registerUser');


// ============================
// RUTAS ADMINISTRATIVAS (agrupadas en /admin)
// ============================

$routes->group('admin', function ($routes) {
    // Mostrar lista de usuarios
    $routes->get('usuarios', 'UserDataController::showList', ['as' => 'usuarios']);

    // Vista de inicio del panel de administrador
    $routes->get('inicio', 'AdminController::showViewHome', ['as' => 'inicio']);

    // Importación de certificados desde archivo
    $routes->post('certificados', 'ExcelController::import', ['as' => 'certificados']);

    // Actualizar datos de usuario
    $routes->post('actualizar-usuario', 'UserDataController::updateData', ['as' => 'actualizar-usuario']);
});



// ============================
// RUTAS DE AUTENTICACIÓN (Shield)
// ============================

// Excluir solo las rutas que vamos a personalizar nosotros (GET /login, GET /register)
service('auth')->routes($routes, [
    'except' => ['login']
]);

// Registrar solo la acción de login (POST /login)
$routes->post('login', '\CodeIgniter\Shield\Controllers\LoginController::loginAction');



// ============================
// PERSONALIZACIÓN DE ERRORES
// ============================

// Ruta personalizada para página 404
$routes->set404Override('ErrorController::miError404');
