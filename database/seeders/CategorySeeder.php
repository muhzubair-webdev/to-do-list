<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Categories = [
            ['user_id' => 1, 'name' => 'Kerjaan'],
            ['user_id' => 1, 'name' => 'Personal'],
            ['user_id' => 1, 'name' => 'Belanja'],
            ['user_id' => 1, 'name' => 'Health'],
        ];

        DB::table('categories')->insert($Categories);
    }
}
