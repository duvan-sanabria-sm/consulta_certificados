<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class RegisterController extends Controller{

    public function registerUser(){

        $user = auth()->user(); 

        return view('dashboard/header').
            view('dashboard/sidebar', ['user' => $user]).
            view('auth/register').
            view('dashboard/footer');
        }
}




