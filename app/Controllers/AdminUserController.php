<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserData;
use App\Models\AuthenticationIdentity;
use App\Models\UserGroupAccess;
use CodeIgniter\Controller;

class AdminUserController extends Controller
{
    protected $helpers = ['form'];

    public function create()
    {
        $model = new UserData();
        $records = $model->getDataGroup();
        $user = auth()->user(); 

        if(auth()->loggedIn()){
            return view('roles/admin/create_user', [
            'user' => $user, 
            'records' => $records
            ]);

        }else {
            return view('auth/login');
        }
    }

    public function store()
    {
        try {
            $validationRules = [
                'email'    => 'required|valid_email|is_unique[identidades_autenticacion.secret]',
                'password' => 'required|min_length[8]',
                'role'     => 'required|in_list[administrador,gestor]',
            ];

            $validationMessages = [
                'email' => [
                    'valid_email' => 'Debe ingresar un correo válido.',
                    'is_unique'   => 'Este correo ya está registrado.',
                ],
                'password' => [
                    'min_length' => 'La contraseña debe tener al menos 8 caracteres',
                ],
                'role' =>[
                    'required' => 'El rol es obligatorio',
                    'in_list' => 'Seleccione un rol válido',
                ]
            ];

            if (! $this->validate($validationRules, $validationMessages)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $usuarioModel    = new User();
            $identidadModel  = new AuthenticationIdentity();
            $grupoModel      = new UserGroupAccess();

            //Crear usuario
            $usuarioID = $usuarioModel->insert([
                'username'   => $this->request->getPost('username'),
                'status'     => 'activo',
            ]);

            // Registrar identidad de inicio de sesión
            $identidadModel->insert([
                'user_id'   => $usuarioID,
                'type'      => 'email_password',
                'secret'    => $this->request->getPost('email'), 
                'secret2'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);

            //Asignar grupo (rol)
            $grupoModel->insert([
                'user_id' => $usuarioID,
                'group'   => $this->request->getPost('role'),
                'created_at' => date('Y-m-d H:i:s'),
            ]);

            return redirect()->route('create-user')->with('message', 'Usuario creado exitosamente.');

        }catch(\Throwable $e){
            log_message('error', $e->getMessage());
            return redirect()->route('create-user')->with('message', 'Ocurrió un error inesperado.');
        }
    }
}
