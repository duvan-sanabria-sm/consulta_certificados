<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string {
        return view('dashboard/headerUser').
               view('roles/users/main').
               view('dashboard/footer');
    }
}
