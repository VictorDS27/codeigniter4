<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoasModel extends Model{
    protected $table = 'tb_pessoas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'profissao', 'idade'];

    public function getPessoas(){
         return $this->findAll(); 
    }

    public function getPessoa($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}