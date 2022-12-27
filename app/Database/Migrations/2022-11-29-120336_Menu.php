<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'foto_menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga_menu' => [
                'type'       => 'BIGINT',
                'constraint' => '100',
            ],
            'kesediaan' => [
                'type' => 'ENUM("tersedia", "tiada")',
                'default' => 'tersedia',
                'null' => FALSE,
            ],
            'store' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'id_kategori' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_kategori', 'tbl_kategori', 'id');
        $this->forge->createTable('tbl_menu');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_menu');
    }
}
