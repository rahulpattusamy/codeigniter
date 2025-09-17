<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'rahulraj',
                'email'    => 'rahul@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
            ],
            [
                'username' => 'john_doe',
                'email'    => 'john@example.com',
                'password' => password_hash('secret', PASSWORD_DEFAULT),
            ],
        ];

        // Insert data
        $this->db->table('student')->insertBatch($data);
    }
}
