<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'role_name' => 'employee',
            
        ]);
        DB::table('role')->insert([
            'role_name' => 'candidate',
            
        ]);
        
    }
}
