<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLinkFieldToCertificates extends Migration
{
    public function up()
    {
        $this->forge->addColumn('certificados', [
            'link_certificado' => [
                'type' => 'VARCHAR',
                'constraint' => 2048,
                'null' => true,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('certificados', 'link_certificado');
    }
}
