<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        $admin  = User::where('email', 'admin@jasaku.com')->first();
        $vendor = User::where('email', 'vendor1@jasaku.com')->first();
        $user   = User::where('email', 'user1@jasaku.com')->first();

        DB::table('role_user')->insert([
            ['user_id' => $admin->id, 'role_id' => 1],
            ['user_id' => $vendor->id, 'role_id' => 2],
            ['user_id' => $user->id, 'role_id' => 3],
        ]);
    }
}
