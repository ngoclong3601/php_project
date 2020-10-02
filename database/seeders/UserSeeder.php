<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Long',
            'birthday' => '1999-01-01',
            'phone' => '0345461230',
            'gender' => 'nam',
            'company_name' => 'asoft',
            'id_role' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Kha',
            'birthday' => '1998-01-01',
            'phone' => '02454230',
            'gender' => 'nam',
            'company_name' => 'bsoft',
            'id_role' => '2',
        ]);
    }
}
