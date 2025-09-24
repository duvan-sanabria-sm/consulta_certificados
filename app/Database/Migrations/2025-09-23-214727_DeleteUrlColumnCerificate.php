<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DeleteUrlColumnCerificate extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('certificados', 'link_certificado');

    }

    public function down()
    {
        //
    }
}
