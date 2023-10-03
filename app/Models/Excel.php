<?php 
namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class Excel extends Model{

    //Propiedades
    protected $table = 'certificado';
    protected $db;
    protected $primaryKey = 'no_certificado';


    //Constructor de Inicialización
    public function __construct(){

        parent::__construct();
    }
        

   //Método para insertar datos para la llave principal por defecto como UUID
    public function insertWidthUUID(){

        $uuid =  Uuid::uuid4()->toString();
        $data = ['no_certificado' => $uuid];
        return $data['no_certificado'];
    }

    
    //Método para insertar datos desde el excel
    function importDataExcel($sheet) {
    
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        $number_certificates = 0;
        $imported_certificates = 0;
        $arr_data_certificates = [];

        if($sheet->getHighestRow()<2){

            return "Error: Los archivos deben contenerse en la primera hoja";
        }else{

            foreach($sheet->getRowIterator(2) as $row){
                
                $model = new \App\Models\Excel();
                $no_certificates = trim($sheet->getCellByColumnAndRow(1,$row->getRowIndex()));
                //$no_certificates = $model->insertWidthUUID();
                $name = trim($sheet->getCellByColumnAndRow(2,$row->getRowIndex()));
                $capacitation = trim($sheet->getCellByColumnAndRow(3,$row->getRowIndex()));
                
                if($no_certificates == '' || $name == '' || $capacitation == ''){
                    continue;
                }

                $data_certificates = ['no_certificado'=>$no_certificates, 'nombre'=>$name, 'capacitacion'=> $capacitation];
                $arr_data_certificates[] = $data_certificates;
                $number_certificates++;
            }
        }
            
        $imported_certificates = $builder->insertBatch($arr_data_certificates);
        return $imported_certificates;       
    }
}


