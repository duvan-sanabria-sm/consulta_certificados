<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller{

        function showViewMain(): string {

                return view('dashboard/header').
                view('roles/admin/main').
                view('dashboard/footer');
        }

}