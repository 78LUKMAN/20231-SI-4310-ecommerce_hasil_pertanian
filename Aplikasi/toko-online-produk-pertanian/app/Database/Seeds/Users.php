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
                'username' => 'admintoko',
                'password' => password_hash('groceriapekalongan', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            [
                'name' => 'lukman',
                'username' => 'lukmanhh',
                'password' => password_hash('lukman78', PASSWORD_DEFAULT),
                'role' => 'guest'
            ],
        ];
        foreach ($data as $data) {
            $this->db->table('users')->insert($data);
        }
    }
}