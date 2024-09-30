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
                'name' => 'Pak Jon',
                'email' => 'akademik@akademik.com',
                'role' => 'akademik',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'El Slamet Sentausa',
                'email' => 'elslamet@students.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Susi Susiastuti S.Kom, M.Kom',
                'email' => 'susi@lecturer.com',
                'role' => 'dosen',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Dr. Ahmed Dicks S.Kom, M. Si, P.Hd',
                'email' => 'ahdick@lecturer.com',
                'role' => 'dekan',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Budi Yono S.Kom, M.T',
                'email' => 'budi@lecturer.com',
                'role' => 'kaprodi',
                'password' => bcrypt('123')
            ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
