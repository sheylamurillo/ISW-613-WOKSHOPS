<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
use App\Models\careerModel;

class Careers extends Controller
{
    public function index()
    {
        $model = new careerModel();
        $data['careers'] = $model->findAll();
        return view('careers/index', $data);
    }
    public function create()
    {
        return view('careers/create');
    }

    public function store()
    {
        $model = new careerModel();

        $model->save([
            'career'  => $this->request->getPost('name'),
        ]);

        return redirect()->to('/careers');
    }

    public function edit($id)
    {
        $model = new careerModel();
        $data['career'] = $model->find($id);
        return view('careers/edit', $data);
    }

    public function update($id)
    {
        $model = new careerModel();

        $model->update($id, [
            'career'  => $this->request->getPost('name'),
        ]);

        return redirect()->to('/careers');
    }
    
}
