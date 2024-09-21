<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUsers extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'username'    => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
            'created_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('username', true);
        $this->forge->createTable('tbl_users');
    }

    public function down()
    {
        //
    }
}
