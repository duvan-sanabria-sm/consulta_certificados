<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{

        public function showViewLogin(): string
        {
            return view('auth/login');
        }
}