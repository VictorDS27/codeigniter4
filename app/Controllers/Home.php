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
    public function pessoa(){
        $model = new PessoaModel();
        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas()
        ];

        echo view('temp/header');
        echo view('pessoa', $data);
        echo view('temp/footer');
    }
}
