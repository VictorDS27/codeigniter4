<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\seeder;

class pessoas extends Seeder
{
    public function run()
    {
        $nome = ['Maria', 'Ana', 'Victor', 'Marcos', 'João'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'nome' => $nome[$x],
                'profissao'   => 'Programador', 
                'idade' => 20,
                'senha' =>MD5("123")
            ];
                $this->db->table('tb_pessoas')->insert($data);
        }
    


    }
}