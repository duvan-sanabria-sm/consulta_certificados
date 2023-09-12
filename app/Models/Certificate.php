<?php 
namespace App\Models;

use CodeIgniter\Model;

class Certificate extends Model{
    protected $table      = 'retie';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

   function certificaredConsultations($id){
        return $this->find($id);
    }
}