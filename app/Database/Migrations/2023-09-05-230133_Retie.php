<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Retie extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'certificado' => [
                'type' => 'INT',
                'containt' => 5,
                'unsigned' => true,
                'auto_increment' => false,
            ],

            'nombre' => [
                'type' => 'VARCHAR',
                'containt' => 15,
                'unsigned' => true,
            ],

            'capacitacion' => [
                'type' => 'VARCHAR',
                'containt' => 20,
                'unsigned' => true,
            ],

            'fecha' => [
                'type' => 'TIMESTAMP',
                'unsigned' => true,
            ],

        ]);

        $this->forge->addKey('certificado');
        $this->forge->createTable('retie');
    }

    public function down()
    {
        //
    }
}
