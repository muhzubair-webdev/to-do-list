<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{

    public function run(): void
    {
        $tasks = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Selesaikan laporan keuangan',
                'description' => 'Buat laporan keuangan untuk bulan ini dan kirim ke atasan.',
                'priority' => 'high',
                'is_completed' => false,
                'due_date' => now()->addDays(3),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Belanja kebutuhan rumah tangga',
                'description' => 'Beli bahan makanan dan perlengkapan rumah tangga untuk minggu ini.',
                'priority' => 'medium',
                'is_completed' => false,
                'due_date' => now()->addDays(5),
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Jadwalkan janji dengan dokter',
                'description' => 'Buat janji dengan dokter untuk pemeriksaan rutin.',
                'priority' => 'low',
                'is_completed' => false,
                'due_date' => now()->addWeeks(1),
            ],
        ];

        DB::table('tasks')->insert($tasks);
    }
}
