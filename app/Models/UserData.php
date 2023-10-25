<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserData extends Model{
    
    protected $table      = 'identidades_autenticacion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'secret', 'secret2', 'grupo'];

    //Obtener id del usuario
    public function getDataById($id)
    {
        $data = $this->find($id);
        return $data;
    }

    public function getDataGroup()
    {
        return $this->db->table($this->table)
        ->join('acceso_grupo_usuarios', 'acceso_grupo_usuarios.user_id = identidades_autenticacion.user_id')
        ->select('identidades_autenticacion.*, acceso_grupo_usuarios.group AS grupo')
        ->get()->getResultArray();
    }


    //Modificar datos
    public function updateData($dataToUpdate)    
    { 
        return $this->update($dataToUpdate['id'], $dataToUpdate);

    }   
}