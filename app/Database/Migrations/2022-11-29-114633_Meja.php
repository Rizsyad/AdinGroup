<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meja extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_meja' => [
                'type'       => 'VARCHAR',
                'constraint' => '3',
            ],
            'status_meja' => [
                'type' => 'ENUM("Kosong","Reserved")',
                'default' => 'Kosong',
                'null' => FALSE,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_meja');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_meja');
    }
}
