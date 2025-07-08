<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{

        public function showViewLogin(): string
        {
            log_message('debug', 'Datos recibidos: ' . print_r($this->request->getPost(), true));
   

            return view('auth/login');
        }
}