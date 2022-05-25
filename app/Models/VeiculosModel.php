<?php

namespace App\Models;

use CodeIgniter\Model;

class VeiculosModel extends Model{
    protected $table = 'tb_veiculos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['marca', 'modelo', 'placa', 'cor'];

    public function getVeiculos(){
         return $this->findAll(); 
    }

    public function getVeiculo($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}