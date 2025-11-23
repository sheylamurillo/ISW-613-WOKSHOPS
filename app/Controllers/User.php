<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
use App\Models\userModel;
use App\Models\careerModel;

class User extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }
    public function create()
    {
         $careerModel = new careerModel();
        $data['careers'] = $careerModel->findAll();
        return view('users/create', $data); 
    }

    public function store()
    {
        $model = new UserModel();

        $model->save([
            'name'  => $this->request->getPost('name'),
            'lastName' => $this->request->getPost('lastName'),
            'idCareer' => $this->request->getPost('idCareer'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();
    $careerModel = new careerModel();

    $data['user'] = $userModel->find($id);
    $data['careers'] = $careerModel->findAll(); 

    return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $model->update($id, [
            'name'  => $this->request->getPost('name'),
            'lastName' => $this->request->getPost('lastName'),
            'idCareer' => $this->request->getPost('idCareer'),
        ]);

        return redirect()->to('/users');
    }

   
    
}
