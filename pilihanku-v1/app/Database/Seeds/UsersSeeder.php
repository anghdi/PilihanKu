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
                'password' => password_hash('9B!vX3l@mZ*4Qw7$', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'admin',
                'email'    => null,
                'password' => password_hash('A5*Zy7#bP2@xW8!v', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data ke tabel 'tbl_users'
        $this->db->table('tbl_users')->insertBatch($data);
        
    }
}
