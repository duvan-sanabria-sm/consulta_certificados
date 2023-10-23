<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'gestor';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys
     * are the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group
     * when using functions such as:
     *      $user->addGroup('superadmin');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://github.com/codeigniter4/shield/blob/develop/docs/quickstart.md#change-available-groups for more info
     */
    public array $groups = [
        'administrador' => [
            'title'       => 'administrador',
            'description' => 'El que gestiona todas las funcionalidades del aplicativo',
        ],
        'gestor' => [
            'title'       => 'Gestor de datos',
            'description' => 'El que tiene solo permisos para subir archivos de un excel',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system.
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'administrador.crear'  => 'Puede crear usuarios del aplicativo',
        'administrador.editar' => 'Puede editar los usuarios que ingreso',
        'gestor.importar'      => 'Puede importar datos del excel',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     *
     * This defines group-level permissions.
     */
    public array $matrix = [

        'administrador' => [
            'administrador.crear',
            'administrador.editar',
        ],

        'gestor' => [
            'gestor.importar'
        ]
    ];
}
