<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Find the role_id for the 'admin' role
        $adminRoleId = DB::table('roles')->where('name', 'admin')->value('id');

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@yopmail.com',
            'profile_picture' => null,
            'phone' => '1234567890',
            'password' => bcrypt('Qwerty!@#'),
            'role_id' => $adminRoleId,
            'created_at' => now()
        ]);
    }
}
