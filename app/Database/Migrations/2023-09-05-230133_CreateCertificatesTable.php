<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCertificatesTable extends Migration
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
                'type' => 'DATE',
            ]
        ]);

        $this->forge->addKey('no_certificado', true);
        $this->forge->createTable('certificados'); 
    }

    public function down()
    {
        $this->forge->dropTable('certificados');
    }
}
