<?php 
namespace App\Models;

use CodeIgniter\Model;

class Certificate extends Model{
    protected $table      = 'certificados';
    protected $primaryKey = 'no_certificado';

   function certificaredConsultations($id, $country){

        $builder = $this->builder();
        
        $result = $builder->where('no_certificado', $id)->where('pais', $country)->get()->getRow();
        return $result;
    }
}