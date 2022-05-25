<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\seeder;

class Veiculos extends Seeder
{
    public function run()
    {
        $carro = ['Hyundai', 'Fiat', 'Volkswagen', 'Ford', 'Chevrolet'];
        for($x = 0; $x < 5; $x++){
            $Carros = [
                'marca' => $carro[$x],
               'modelo' => 'Onix',
                'placa' => 'EBF6150'  ,        
                'cor'   => 'Preto' 

            ];
                $this->db->table('tb_veiculos')->insert($Carros);
        }

    }
}