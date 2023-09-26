<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;


class Certificate extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'no_certificado' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],

            'capacitacion' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'fecha' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);

        $this->forge->addKey('no_certificado',true,true);
        $this->forge->createTable('certificado');
    }

    public function down(){

        if ($this->forge->dropTable('certificado')) {
            echo 'Base de Datos Eliminada!';
        }
    }
}
