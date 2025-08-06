<?php 
        namespace App\Controllers;

        use App\Models\Excel;
        use CodeIgniter\Controller;
        use PhpOffice\PhpSpreadsheet\IOFactory;
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
        use PhpOffice\PhpSpreadsheet\Style\Alignment;
        use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
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
                        $data = $get_certificate->findAllCertificates();

                        $spreadsheet = new Spreadsheet();
                        $sheet = $spreadsheet->getActiveSheet();
                        $sheet->setTitle('Certificados');

                        $sheet->setCellValue('A1', 'no_certificado');
                        $sheet->setCellValue('B1', 'nombre');
                        $sheet->setCellValue('C1', 'capacitacion');
                        $sheet->setCellValue('D1', 'fecha');
                        $sheet->setCellValue('E1', 'link_certificado');
                        $sheet->setCellValue('F1', 'pais');


                        $fila = 2;

                        foreach ($data as $filaDatos) {
                        $sheet->setCellValue("A$fila", $filaDatos['no_certificado']);
                        $sheet->setCellValue("B$fila", $filaDatos['nombre']);
                        $sheet->setCellValue("C$fila", $filaDatos['capacitacion']);
                        $sheet->setCellValue("D$fila", $filaDatos['fecha']);
                        $sheet->setCellValue("E$fila", $filaDatos['link_certificado']);
                        $sheet->setCellValue("F$fila", $filaDatos['pais']);


                        
                        $fila++;
                        }
                                                
                        $writer = new Xlsx($spreadsheet);
                        
                        if (ob_get_length()) {
                                ob_end_clean();
                        }

                        // Configurar headers
                        $filename = 'certificados_' . date('Y-m-d') . '.xlsx';
                        
                        // Guardar el archivo en memoria y devolverlo como respuesta
                        $temp_file = tempnam(sys_get_temp_dir(), 'excel_');
                        $writer->save($temp_file);

                        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                        header('Content-Disposition: attachment; filename="' . $filename . '"');
                        header('Content-Length: ' . filesize($temp_file));
                        readfile($temp_file);
                        exit;
                }
        }       