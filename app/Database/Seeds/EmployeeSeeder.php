<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Alice',
                'email'    => 'alice@example.com',
                'position' => 'Data Manager',
            ],
            [
                'name'     => 'Bob',
                'email'    => 'bob@example.com',
                'position' => 'Database Developer',
            ],
            [
                'name'     => 'Chloe',
                'email'    => 'chloe@example.com',
                'position' => 'Database Designer',
            ],
        ];

           // Arrays for generating random names, emails, and positions
           $firstNames = ['John', 'Jane', 'Alex', 'Emily', 'Chris', 'Katie', 'Michael', 'Sarah', 'David', 'Laura'];
           $positions = ['Software Engineer', 'System Analyst', 'Network Administrator', 'IT Manager', 'Security Specialist'];

           for ($i = 0; $i < 97; $i++) {
            $firstName = $firstNames[array_rand($firstNames)];
            $name = "$firstName";

            // Create an email by combining first and last name and appending a random number
            $email = strtolower("$firstName") . rand(1, 1000) . '@example.com';
            $position = $positions[array_rand($positions)];

            $data[] = [
                'name'     => $name,
                'email'    => $email,
                'position' => $position,
            ];
        }
   

        // Using Query Builder
        $this->db->table('employees')->insertBatch($data);
    }
}
