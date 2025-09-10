<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthenticationIdentity extends Model
{
    protected $table            = 'identidades_autenticacion';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'type', 'secret', 'secret2', 'created_at', 'updated_at'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $returnType       = 'array';
}
