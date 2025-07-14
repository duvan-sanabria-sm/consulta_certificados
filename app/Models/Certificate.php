<?php 
namespace App\Models;

use CodeIgniter\Model;

class Certificate extends Model{
    protected $table      = 'certificados';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'no_certificado';

   function certificaredConsultations($id){
        return $this->find($id);
    }
}