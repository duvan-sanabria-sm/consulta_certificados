<?php

namespace App\Models;

use CodeIgniter\Model;

class UserGroupAccess extends Model
{
    protected $table            = 'acceso_grupo_usuarios';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'group', 'created_at'];
    protected $useTimestamps    = false;
    protected $returnType       = 'array';
}
