<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sig extends Migration
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

            'norma' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'unsigned' => true,
            ],

            'alcance' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'unsigned' => true,
            ],

            'acreditacion' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unsigned' => true,
            ],

            'razon social' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unsigned' => true,
            ],

            'vigente desde' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unsigned' => true,
            ],

            'vigente hasta' => [
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
        $this->forge->createTable('sig');
    }

    public function down()
    {
        //
    }
}
