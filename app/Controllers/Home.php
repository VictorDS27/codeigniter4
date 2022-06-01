<?php

namespace App\Controllers;

 use App\Models\PessoasModel;
 use App\Models\VeiculosModel;

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
    public function excluir($id = null){
        $model = new PessoasModel();
        $model->delete($id);
        return redirect("pessoa");
    }

    public function editar($id = null){
        $model = new PessoasModel();

        $data = [
            'pessoa' => $model->getPessoa($id)
        ];

        echo view('temp/header');
        echo view('cadastro-pessoas',$data);
        echo view('temp/footer');
    }




    public function veiculos(){
        $model = new VeiculosModel();
        $Carros = [
            'title'=>'Veiculos',
            'veiculos'=>$model->getVeiculos()
        ];

    echo view('temp/header');
    echo view('veiculo', $Carros);
    echo view('temp/footer');
}

public function cadastrar(){
    echo view('temp/header');
    echo view('cadastro-carro');
    echo view('temp/footer');
}

public function concluir(){
    $model = new VeiculosModel();

    $model->save([
        'id' => $this->request->getVar('id'),
        'marca' => $this->request->getVar('marca'),
        'modelo' => $this->request->getVar('modelo'),
        'placa' => $this->request->getVar('placa'),
        'cor' => $this->request->getVar('cor'),
    ]);
    
    return redirect('veiculo');
 }
 
 public function excluirVeiculo($id = null){
    $model = new VeiculosModel();
    $model->delete($id);
    return redirect("veiculo");
}

public function login(){
    echo view('temp/header');
    echo view('login');
    echo view('temp/footer');
}

        public function logar(){
            $model = new PessoasModel();

            $senha = $this->request->getVar("senha");
            $nome = $this->request->getVar("nome");

            $data['usuario'] = $model->userLogin($nome, $senha);

            if(empty($data['usuario'])){
                return redirect("login");
            }
            else{
                return redirect("pessoa");
            }

        }

    } 