<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserGroup extends Model
{
    protected $table = 'acceso_grupo_usuarios'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['user_id','group'];


    //Método para obtener el id de una tabla en especifico
    public function getGroupByUserId($userId)
    {
    $builder = $this->db->table('acceso_grupo_usuarios');
    $builder->select('acceso_grupo_usuarios.id AS group_id');
    $builder->join('identidades_autenticacion', 'acceso_grupo_usuarios.user_id = identidades_autenticacion.user_id');
    $builder->where('identidades_autenticacion.id', $userId);

    $query = $builder->get();
    $row = $query->getRow();

    return ($row) ? $row->group_id : null;
    }

    //Método para modificar el grupo de la tabla acceso_grupo_usuarios
    public function updateGroup($userId, $newGroup)
    {
        return $this->where('id', $userId)
            ->set('group', $newGroup)
            ->update();
    }
}
