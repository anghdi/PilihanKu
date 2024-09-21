<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Data yang ingin di-insert
        $data = [
            [
                'username' => 'superadmin',
                'email'    => null,
                'password' => '9B!vX3l@mZ*4Qw7$',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'admin',
                'email'    => null,
                'password' => 'A5*Zy7#bP2@xW8!v',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data ke tabel 'tbl_users'
        $this->db->table('tbl_users')->insertBatch($data);
        
    }
}
