<?php

namespace App\Controllers;

class ServiceController extends BaseController
{
    public function showView(): string
    {

        return view('dashboard/header').
               view('categories/retie').
               view('dashboard/footer');
    }

    public function showViewProducts(): string {

        return view('dashboard/header').
               view('categories/products').
               view('dashboard/footer');

    }

    public function showViewSIG(): string {

        return view('dashboard/header').
        view('categories/sig').
        view('dashboard/footer');
        
    }
}
