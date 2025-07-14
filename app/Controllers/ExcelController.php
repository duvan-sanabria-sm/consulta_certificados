<?php 
        namespace App\Controllers;
        use App\Models\Excel;
        use CodeIgniter\Controller;
        use PhpOffice\PhpSpreadsheet\IOFactory;
        use PhpOffice\PhpSpreadsheet\Reader\Exception as ReaderException;

        /* Controlador para manejar la importación de datos desde el archivo Excel*/
        class ExcelController extends Controller
        {
                public function __construct() 
                {
                        //Carga los helpers necesarios
                        helper(['form','url']); 
                }
                
                /*Importa datos desde un archivo Excel enviado vía POST (AJAX)*/
                public function import()
                {
                        try{    

                        $file = $this->request->getFile('excel_file');

                        //Validación inicial: archivo no cargado o con error
                        if(!$file || $file->getError() !== UPLOAD_ERR_OK){

                                return $this->response->setStatusCode(400)->setJSON([
                                'status'  => 'error',
                                'message' => 'No se ha cargado un archivo válido.'
                                ]);

                        }

                        //Validar extensión
                        if($file->getClientExtension() !== "xlsx"){

                                return $this->response->setStatusCode(400)->setJSON([
                                        'status'  => 'error',
                                        'message' => 'Solo se aceptan archivos con extensión .xlsx.'
                                ]);
                        }

                        //Carga el archivo excel
                        $reader = IOFactory::createReader('Xlsx');
                        $spreadsheet = $reader->load($file->getTempName());
                        $sheet = $spreadsheet->getSheet(0);

                        
                        // Procesar los datos con el modelo
                        $excelModel = new Excel();
                        $resultData = $excelModel->importDataExcel($sheet);

                        
                        // Devolver respuesta de éxito
                        return $this->response->setJSON([
                                'status' => 'success',
                                'message' => $resultData
                          ]);
                                       
                        }catch(\PhpOffice\PhpSpreadsheet\Reader\Exception $e){
                                
                                // Errores relacionados con PhpSpreadsheet
                                return $this->response->setStatusCode(500)->setJSON([
                                        'status' => 'error',
                                        'message' => 'Error al leer el archivo Excel:'. $e->getMessage()

                                ]);
                        }catch (\Throwable $e) {
                                // Errores inesperados
                                return $this->response->setStatusCode(500)->setJSON([
                                        'status' => 'error',
                                        'message' => 'Error inesperado: ' . $e->getMessage()
                                ]);
                        }  
                }
                
                /*Descargar reporte de los certificados*/
                public function  downoload_report()
                {
                        $get_certificate = new Excel();

                        $data = $get_certificate->findAll();

                        return 'hola';

                        var_dump("datos: ". $data);




                }
        }       