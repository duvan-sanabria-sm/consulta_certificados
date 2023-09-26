<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller{

        function showViewHome(): string {

                if (auth()->loggedIn()) {
                    // Verificar si el usuario tiene el correo específico
                    $user = auth()->user(); // Obtener el usuario autenticado
                    if ($user->email === 'duvan.sanabriam@gmail.com') {

                        return view('dashboard/header').
                        view('roles/admin/register').
                        view('dashboard/footer');


                    } else  {
                        return view('dashboard/header').
                        view('roles/admin/home').
                        view('dashboard/footer');
                    }
                } else {
                        return view('roles/admin/login');
                }
            }
            
        public function logout()
        {
            // Cierra la sesión del usuario
            auth()->logout();
            
            // Redirige a la página de inicio de sesión u otra página después del cierre de sesión
            return redirect()->to('login');
        }
}