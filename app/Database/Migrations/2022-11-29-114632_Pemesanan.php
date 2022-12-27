<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
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
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => '3',
            ],
            'total_harga' => [
                'type'       => 'BIGINT',
                'constraint' => '100',
            ],
            'status_pemesanan' => [
                'type' => 'ENUM("Pesan", "Proses", "Cancel", "Selesai")',
                'default' => 'Pesan',
                'null' => FALSE,
            ],
            'id_meja' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_menu' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_pelanggan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_meja', 'tbl_meja', 'id');
        $this->forge->addForeignKey('id_menu', 'tbl_menu', 'id');
        $this->forge->addForeignKey('id_pelanggan', 'tbl_pelanggan', 'id');
        $this->forge->createTable('tbl_pemesanan');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pemesanan');
    }
}
