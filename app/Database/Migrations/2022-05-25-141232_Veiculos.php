<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Veiculos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
            'type'=>'int',
            'auto_increment'=>true
            ],
            'marca'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'modelo'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'placa'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'cor'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            
            ]);
            $this->forge->addkey('id',true);
            $this->forge->createTable('tb_veiculos');
    }

    public function down()
    {
        $this->forge->dropeTable('tb_veiculos');
    }
}

