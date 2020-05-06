<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'              => 'admin',
        'email'             => 'admin@example.com',
        'password'          => Hash::make('12345678'),
        'remember_token'    => Str::random(10),
        ]);
    }
}
