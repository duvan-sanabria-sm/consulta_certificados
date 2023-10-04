<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class AuthorizationFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = Services::auth(); // Obtener el servicio de autenticación
        $user = $auth->user(); // Obtener el usuario autenticado

        // Verificar si el usuario tiene permiso para acceder a la ruta
        if (!$user || !$user->can('admin.access') || $user->hasPermission('dataManager.create')) {
            return redirect()->to('/');
             // Redireccionar a una página de acceso denegado o inicio de sesión
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No es necesario realizar ninguna acción después del filtro.
    }
}



