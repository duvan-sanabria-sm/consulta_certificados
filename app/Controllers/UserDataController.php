<?php

namespace App\Controllers;

use App\Models\UserData;

class UserDataController extends BaseController
{
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

        $data = [
            'name' => $name,
            'secret' => $email,
            'secret2' => $password,
            'group' => $group,

            // Actualiza más campos aquí según tus necesidades
        ];

        if ($model->update($id, $data)) {
            return redirect()->to(site_url('admin/crear'))->with('success', 'Registro actualizado exitosamente');
        } else {
            return redirect()->to(site_url('admin/crear'))->with('error', 'Error al actualizar el registro');
        }
 
    }

    public function deleteUser($id)
    {
        $model = new UserData();

        // Verificar si el registro existe antes de eliminarlo
        $registro = $model->find($id);

        if (!$registro) {
            return 'Registro no encontrado';
        }

        // Eliminar el registro
        $model->delete($id);

        return redirect()->to(site_url('admin/crear'))->with('success', 'Registro eliminado exitosamente');
    }
}
