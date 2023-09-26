<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string {
        return view('dashboard/header').
               view('roles/users/main').
               view('dashboard/footer');
    }
}
