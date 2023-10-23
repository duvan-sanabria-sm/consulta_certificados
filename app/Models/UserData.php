<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserData extends Model{
    
    protected $table      = 'identidades_autenticacion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'secret', 'secret2', 'grupo'];

    public function getDataGroup()
    {
        return $this->db->table($this->table)
        ->join('acceso_grupo_usuarios', 'acceso_grupo_usuarios.user_id = identidades_autenticacion.user_id')
        ->select('identidades_autenticacion.*, acceso_grupo_usuarios.group AS grupo')
        ->get()->getResultArray();
    }

    public function updateGroup($dataGroup)
    
    { 
        $db = $this->db->table('identidades_autenticacion');
        $this->db->transStart();

        // Actualiza las columnas en la tabla "identidades_autenticacion"
        $db->where('id', $dataGroup['id'])
            ->set('name', $dataGroup['name'])
            ->set('secret', $dataGroup['secret'])
            ->set('secret2', $dataGroup['secret2'])
            ->update();


        // Actualiza la columna "group" en la tabla "acceso_grupo_usuarios"
        $db = $this->db->table('acceso_grupo_usuarios');
        $db->where('user_id', $dataGroup['id'])
            ->set('group', $dataGroup['group'])
            ->update();
        
        $this->db->transComplete();   

        return $this->db->transStatus(); // Devuelve true si la transacción se completa con éxito, o false en caso de error.

    }   
}