<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

//Ayudará a identificar el tipo de petición
use CodeIgniter\HTTP\IncomingRequest;

use PhpOffice\PhpSpreadsheet\IOFactory;

//Ayudará para instanciar la conexión y crear un builder para insertar datos en la tabla
use CodeIgniter\Database\Query;
use RuntimeException;

class ExcelController extends Controller{

        public function import(){
                helper(['form','url']);
                if($this->request->getMethod()== 'post'){
                        $ruta = 'uploads/';
                        if(!is_dir($ruta)){
                                mkdir($ruta,0755);
                        }

                        $file = $this->request->getFile('file_excel');
                        if(!$file->isValid()){
                                throw new RuntimeException($file->getErrorString().'('.$file->getError().')');
                        }
                        else{
                                $name_file = $file->getName();
                                $file->move($ruta);

                                if($file->hasMoved()){

                                        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
                                        
                                        $spreadsheet = $reader->load($ruta.$name_file);
                                        $sheet = $spreadsheet->getSheet(0);

                                        $db = \Config\Database::connect();
                                        $builder = $db->table('retie');

                                        $number_products = 0;
                                        $imported_products = 0;
                                        $arr_errors = [];
                                        $arr_data_products = [];

                                        foreach($sheet->getRowIterator(2) as $row){
                                                $description = trim($sheet->getCellByColumnAndRow(1,$row->getRowIndex()));
                                                $stock = trim($sheet->getCellByColumnAndRow(2,$row->getRowIndex()));
                                                
                                                if($description == '' || $stock == '')
                                                continue;
        
                                                $data_product = ['nombre'=>$description, 'capacitacion'=>$stock];
                                                $arr_data_products[] = $data_product;
                                                $number_products++;
                                        }

                                        $imported_products = $builder->insertBatch($arr_data_products);
                                        $data['imported_products'] = $imported_products;
                                        $data['number_products'] = $number_products;
                                        return view('roles/admin/main',$data);
                                }
                        }    
                }
        }
               
}