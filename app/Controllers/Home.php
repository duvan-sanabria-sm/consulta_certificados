<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        return view('dashboard/header')  
                .view('dashboard/certificates')
                .view('dashboard/footer'); 
    }
}
