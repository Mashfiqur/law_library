<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name'  => Str::random(10),
            'email' => 'admin@lawlibrary.com',
            'occupation' => 'admin',
            'phone' => '01612345678',
            'password' => Hash::make('123456'),
        ]);
    }
}
