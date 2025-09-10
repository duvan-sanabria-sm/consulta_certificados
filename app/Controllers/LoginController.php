<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{

        public function showViewLogin(): string
        {
            auth()->logout();
            
            return view('auth/login');
        }
}