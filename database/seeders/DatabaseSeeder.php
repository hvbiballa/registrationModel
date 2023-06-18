<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->registerUser();
    }

    public function registerUser()
    {
        $datas = [
            [
                'name' => 'Staff',
                'email' => 'staff@example.com',
                'password' => bcrypt('password'),
                'role' => 'staff',
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'role' => 'pengguna',
            ],
            [
                'name' => 'User2',
                'email' => 'user2@example.com',
                'password' => bcrypt('password'),
                'role' => 'pengguna',
            ],
        ];

        foreach ($datas as $data) {
            DB::table('users')->insert($data);
        }
    }
}
