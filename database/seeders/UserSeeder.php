<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 5; $i++){
            DB::table('users')->insert([
                'username' => Str::random(10),
                'email' => Str::random(10),
                'password' => Hash::make('password'),
            ]);
        }
    }
}
