<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin toko',
                'username' => 'adminsemprul',
                'password' => password_hash('middlefinger', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            [
                'name' => 'indra',
                'username' => 'siindra',
                'password' => password_hash('indra123', PASSWORD_DEFAULT),
                'role' => 'guest'
            ],
        ];
        foreach ($data as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}