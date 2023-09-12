<?php 
namespace App\Controllers;

use App\Models\Certificate;
use CodeIgniter\Controller;

class RequestController extends Controller{

        function manageCertificateQuery(){

                $id = $this->request->getGet('identificador');
                
                $certificate = new Certificate();

                $queries = $certificate->certificaredConsultations($id);

                return $this->response->setJSON($queries);

        }

}