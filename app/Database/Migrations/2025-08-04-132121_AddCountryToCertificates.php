<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountryToCertificates extends Migration
{
    public function up()
    {
         $this->forge->addColumn('certificados', [
            'pais' => [
                'type' => 'ENUM',
                'constraint' => ['Panama', 'Colombia'],
                'null' => false,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('certificados', 'pais');

    }
}
