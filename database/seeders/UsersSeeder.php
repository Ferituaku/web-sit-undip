<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'op',
                'email' => 'op@operator.com',
                'role' => 'operator',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Mulyono Widodo',
                'email' => 'Mulyododo@students.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Susi Susiastuti',
                'email' => 'susi@lecturer.com',
                'role' => 'dosen',
                'password' => bcrypt('123')
            ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
