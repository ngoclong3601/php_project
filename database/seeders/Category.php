<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'category_name' => 'Accounting/Finance',
        ]);
        DB::table('category')->insert([
            'category_name' => 'Automomotive Jobs',
        ]);
        DB::table('category')->insert([
            'category_name' => 'Education Training',
        ]);
    }
}
