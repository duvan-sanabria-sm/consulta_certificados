<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldToCertificate extends Migration
{
    public function up()
    {
         $this->forge->addColumn('certificado',[
            'link_certificado' => [
                'type' => 'VARCHAR',
                'constraint' => 2048,
                'null' => true
            ]
            
        ]);
    }

    public function down()
    {
          $this->forge->dropColumn('certificado', 'link_certificado');
    }
}
