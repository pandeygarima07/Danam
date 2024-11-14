<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'donor', 'status' => true, 'created_at' => now()],
            ['name' => 'seeker', 'status' => true, 'created_at' => now()],
            ['name' => 'admin', 'status' => true, 'created_at' => now()],
        ]);
    }
}
