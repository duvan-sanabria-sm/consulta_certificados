<?php

namespace App\Controllers;

use App\Models\UserData;
use CodeIgniter\Exceptions\PageNotFoundException;

class UserDataController extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = service('session');
    }
    public function showList() {
       
        $model = new UserData();

        $data['records'] = $model->getDataGroup();

      
        if (empty($data['records'])) {
            // Si no se encontraron registros, puedes manejarlo aquí
            return "No se encontraron registros";
        } else {
            $user = auth()->user(); 

            return view('dashboard/header').
            view('dashboard/sidebar', ['user' => $user]).
            view('roles/admin/create', $data).
            view('dashboard/footer');
        }
    }


    public function updateData()
    {
        $model = new UserData();

        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $group = $this->request->getPost('group');

        if (!$id) {
            return redirect()->to(site_url('admin/crear'))->with('error', 'ID de registro no válido');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'id' => $id,
            'name' => $name,
            'secret' => $email,
            'secret2' => $hashedPassword,
            'group' =>  $group,

            // Actualiza más campos aquí según tus necesidades
        ];

        if ($model->updateGroup($data)) {
            $this->session->setFlashdata('success', 'Se actualizaron los datos correctamente');
        } else {
            $this->session->setFlashdata('error','Error al actualizar la contraseña');
        }
        return redirect()->to(site_url('admin/editar'));

    }

    public function deleteUser($id)
    {
        $model = new UserData();

        // Verificar si el registro existe antes de eliminarlo
        $registro = $model->find($id);

        if ($registro == null) {
            throw PageNotFoundException::forPageNotFound();
        }

        $model->delete($id);

        return redirect()->to('admin/crear')->with('message', 'Registro eliminado exitosamente');

    }

}
