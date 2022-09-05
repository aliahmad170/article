<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@test.local',
            'password'=>bcrypt('121212'),
            'created_at'=>'2022-01-01 14:28:15',
            'updated_at'=>'2022-01-01 14:28:15',

          
        ]);
    }
}
