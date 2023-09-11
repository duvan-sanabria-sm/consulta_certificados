<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'certificado' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => false,
            ],

            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unsigned' => true,
            ],

            'solicitante' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'unsigned' => true,
            ],

            'normas' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unsigned' => true,
            ],

            'estado' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unsigned' => true,
            ],

        ]);

        $this->forge->addKey('certificado');
        $this->forge->createTable('productos');
    }

    public function down()
    {
        //
    }
}
