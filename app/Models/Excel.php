<?php 
namespace App\Models;

use CodeIgniter\Model;

class Excel extends Model{
   
    protected $table = 'certificado';
    
    function importDataExcel($sheet) {
        
        $db = \Config\Database::connect();
        $builder = $db->table('certificado');

        $number_certificates = 0;
        $imported_certificates = 0;
        $arr_data_certificates = [];

        if($sheet->getHighestRow()< 2){

            return "Error: Los archivos deben contenerse en la primera hoja";
        }else{

            foreach($sheet->getRowIterator(2) as $row){
                $no_certificates = trim($sheet->getCellByColumnAndRow(1,$row->getRowIndex()));
                $name = trim($sheet->getCellByColumnAndRow(2,$row->getRowIndex()));
                
                if($no_certificates == '' || $name == ''){
                    continue;
                }

                $data_certificates = ['no_certificado'=>$no_certificates, 'nombre'=>$name];
                $arr_data_certificates[] = $data_certificates;
                $number_certificates++;
            }
        }
            
            $model = new \App\Models\Excel();

            $existing_certificates = $model->checkExistence($arr_data_certificates);

            if (!empty($existing_certificates)) {
                $existing_certificates_numbers = array_column($existing_certificates, 'no_certificado');
                $message = "Los siguientes números de certificado ya existen en la base de datos: " . implode(', ', $existing_certificates_numbers);

                return $message;
            }else{
                $imported_certificates = $builder->insertBatch($arr_data_certificates);
                
                $data['imported_certificates'] = $imported_certificates;
                $data['number_certificates'] = $number_certificates;  
                
                return $data;
               
            }
    }

    public function checkExistence($arr_data_certificates){
        $db = \Config\Database::connect();
        $builder = $db->table('certificado');

        $certificates_to_check = array_column($arr_data_certificates, 'no_certificado');

        $builder->select('no_certificado');
        $builder->whereIn('no_certificado', $certificates_to_check);
        $query = $builder->get();

        $existing_certificates = $query->getResultArray();

        return $existing_certificates;
    }
}