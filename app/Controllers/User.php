<?php

namespace App\Controllers;

use App\Models\Certificate;

class User extends BaseController
{
    public function index(): string 
    {
        return view('roles/users/main', ['user' => $user ??[]]);
               
    }

    public function ShowCountryQuery(string $country)
    {
        $country = strtolower($country);

        if(!in_array($country, ['panama', 'colombia'])){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        }

        return view("roles/users/certification/certificates_". $country);
    }

      function manageCertificateQuery(){

                $id = $this->request->getVar('identificador');
                $country = $this->request->getVar('country');

                if(empty($id) || empty($country)){
                    return   $this->response->setJSON([
                        'success' => false,
                        'message' => 'Faltan datos requeridos: identificador y país son obligatorios.'
                    ]);
                }
            
                $certificate = new Certificate();
                $queries = $certificate->certificaredConsultations($id,$country);
                return $this->response->setJSON($queries);
        }
}
