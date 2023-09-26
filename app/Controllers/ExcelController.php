<?php 
        namespace App\Controllers;
        use App\Models\Excel;
        use CodeIgniter\Controller;
        class ExcelController extends Controller{
                
                public function __construct() {
                        helper(['form','url']);
                }

                public function import(){

                        if($this->request->getMethod()== 'post'){

                                $file = $this->request->getFile('excel_file');
                                
                               
                                if($file->isValid()){
                                        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');

                                        try {
                                                if($file->getClientExtension() == "xlsx"){
                                                        $spreadsheet = $reader->load($file->getTempName());
                                                        $sheet = $spreadsheet->getSheet(0);

                                                        $excelModel = new Excel();
                                                        $resultData = $excelModel->importDataExcel($sheet);

                                                        if($resultData){
                                                                return "¡Felicidades! Los registros se han importado correctamente en la base de datos.";    
                                                        }else{
                                                                return "Lo siento, no fue posible insertar los registros en la base de datos.";
                                                        }
                        
                                                        
                                                }
                                                else{
                                                        return "Solo se aceptan archivos de xlsx";
                                                }
                                        }catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                                                $error = $e->getMessage();
                                                $error = 'Error al cargar el archivo Excel: ' . $e->getMessage();
                                                return $error;
                                        }
                                }else{
                                        $error = 'El archivo no es válido.';
                                        return "error";
                                        //return redirect()->route('home');
                                }
                        }else{
                                $error ="bien";
                                $data = ["error" => $error];
                                return view('roles/admin/main',$data);
                        }
                }
        }       