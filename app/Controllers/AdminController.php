<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller{

        function showViewHome(): string 
        {
            if (auth()->loggedIn()) 
            {
                $user = auth()->user(); 
                    
                if (auth()->loggedIn()) {
                        
                    return view('dashboard/header'). 
                            view('dashboard/sidebar',['user' => $user]).
                            view('roles/admin/home').
                            view('dashboard/footer');
                }else {
                    
                    return view('welcome_message');
                }
            }
            return "no carga";
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
        
            
        public function logout()
        {
            // Cierra la sesión del usuario
            auth()->logout();
            
            // Redirige a la página de inicio de sesión u otra página después del cierre de sesión
            return redirect()->to('log');
        }
}