<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $users = [
            [
                'username' => 'johndoe',
                'fullname' => 'John Doe',
                'email' => 'johndoe@example.com',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
