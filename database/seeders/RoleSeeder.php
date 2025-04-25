<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('roles')->insert( [
        	['role_name' => 'Admin', 'url' => '/admin'],
        	['role_name' => 'User', 'url' => '/user'],
        	['role_name' => 'Guest', 'url' => '/guest'],
        ]);
    }
}
