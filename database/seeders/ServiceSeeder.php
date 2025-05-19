<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            'user_id' => 2, // vendor
            'category' => 'Cleaning Service',
            'title' => 'Pembersihan Rumah Harian',
            'description' => 'Layanan bersih-bersih rumah lengkap dan profesional.',
            'price' => 150000,
            'location' => 'Jakarta Selatan',
            'status' => 'approved',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
