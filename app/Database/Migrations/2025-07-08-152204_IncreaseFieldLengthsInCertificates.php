<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IncreaseFieldLengthsInCertificates extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('certificados', [
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'capacitacion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'link_certificado' => [
                'type' => 'VARCHAR',
                'constraint' => 2048,
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        // Revertir a los valores anteriores
        $this->forge->modifyColumn('certificados', [
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false
            ],
            'capacitacion' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false
            ],
            'link_certificado' => [
                'type' => 'VARCHAR',
                'constraint' => 2048,
                'null' => true // Como fue añadido antes con null
            ]
        ]);
    }
}
