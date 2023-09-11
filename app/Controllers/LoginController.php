<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{

        public function showViewLogin(): string
        {
            return view('dashboard/header').
                   view('roles/admin/login').
                   view('dashboard/footer');
        }
}