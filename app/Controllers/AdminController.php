<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller{

        function showViewHome(): string 
        {
            $user = auth()->user(); 

            if (auth()->loggedIn()) {                
                
                return view('roles/admin/home', ['user' => $user]);
            
            }else {
                    
                return view('auth/login');
            }
        }

        function  showViewCreate(): string 
        {
            $user = auth()->user(); 

            return 
                            view('dashboard/header').
                            view('dashboard/sidebar',['user' => $user]).
                            view('roles/admin/create').
                            view('dashboard/footer');


                           
        }

        function  showViewDelete()
        {
            $user = auth()->user(); 

            return view('dashboard/header'). 
            view('dashboard/sidebar',['user' => $user]).
            view('roles/admin/delete').
                            view('dashboard/footer');
                           
        }
}
