<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string {
        return view('roles/users/main', ['user' => $user ??[]]);
               
    }

    public function showPanamaQuery(){
        return view('roles/users/certification/certificates_panama');
    }

     public function showColombiaQuery(){
        return view('roles/users/certification/certificates_colombia');
    }

}
