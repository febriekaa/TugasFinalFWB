<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        $adminId = DB::table('user')->insertGetId([
            'name' => 'Admin JasaKu',
            'email' => 'admin@jasaku.com',
            'phone' => '081234567890',
            'address' => 'Kantor Pusat',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Vendor
        $vendorId = DB::table('user')->insertGetId([
            'name' => 'Vendor Bersih-Bersih',
            'email' => 'vendor@jasaku.com',
            'phone' => '082233445566',
            'address' => 'Jl. Vendor 1',
            'password' => Hash::make('vendor123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Customer
        $customerId = DB::table('user')->insertGetId([
            'name' => 'Budi Customer',
            'email' => 'budi@jasaku.com',
            'phone' => '083344556677',
            'address' => 'Jl. Pelanggan 2',
            'password' => Hash::make('user123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Assign roles (pivot)
        DB::table('role_user')->insert([
            ['user_id' => $adminId, 'role_id' => 1],
            ['user_id' => $vendorId, 'role_id' => 2],
            ['user_id' => $customerId, 'role_id' => 3],
        ]);
    }
}
