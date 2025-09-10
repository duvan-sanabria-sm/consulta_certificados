<?php

namespace App\Controllers;

use App\Models\UserData;
use App\Models\UserGroup;

use CodeIgniter\Exceptions\PageNotFoundException;

class UserDataController extends BaseController
{
    protected $session;

    //Método constructor
    public function __construct()
    {
        $this->session = service('session');
    }

    //Método para mostrar a todos los usuarios
    public function showList() 
    {
        $model = new UserData();
        $records = $model->getDataGroup();
        $user = auth()->user(); 

        $message = empty($records)? 'No se encontraron registros': null;

        if(auth()->loggedIn()){
            return view('roles/admin/create', [
            'user' => $user, 
            'records' => $records,
            'message' => $message
            ]);

        }else {
            return view('auth/login');
        }
    }


    //Método para la gestión de datos del usuario
    public function updateData()
    {
        $userDataModel = new UserData();

        $postData = $this->request->getPost();
        $password = $this->request->getPost('secret2');
        $rol = $this->request->getPost('group');


        $password_encript = password_hash($password,PASSWORD_BCRYPT);
        $postData['secret2'] = $password_encript; 
    
        $userGroup = new UserGroup();

        $userId = $userGroup->getGroupByUserId($postData['id']);

        if ($userDataModel->updateData($postData) && $userGroup->updateGroup($userId, $rol)) {
            $this->session->setFlashdata('success', 'Se actualizaron los datos correctamente');

        } else {
            $this->session->setFlashdata('error', 'No se encontró un grupo para el usuario');
        }
        
        return redirect()->to(site_url('admin/usuarios'));
    }

    //Método para la eliminación de usuarios
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
