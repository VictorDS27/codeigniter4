<?php

namespace App\Controllers;

 use App\Models\PessoasModel;

class Home extends BaseController

{
    public function index()
    {
        echo view('temp/header');
        echo view('home');
        echo view('temp/footer');
    }
    public function page($page='home')
    {
        echo view('temp/header');
        echo view($page);
        echo view('temp/footer');
    }
    public function pessoas(){
        $model = new PessoasModel();
        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas()
        ];

        echo view('temp/header');
        echo view('pessoa', $data);
        echo view('temp/footer');
    }
    public function cadastro(){
        echo view('temp/header');
        echo view('cadastro-pessoas');
        echo view('temp/footer');
    }

    public function gravar(){
        $model = new PessoasModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'profissao' => $this->request->getVar('profissao'),
            'idade' => $this->request->getVar('idade'),
        ]);

        return redirect('pessoa');
    }
}
