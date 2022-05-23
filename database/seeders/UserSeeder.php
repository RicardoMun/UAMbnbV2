<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Ricardo Muñoz",
            'email' => "ricardo@gmail.com",
            'password' => Hash::make('ricardo1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Alejandro Gómez",
            'email' => "alejandro@gmail.com",
            'password' => Hash::make('alejandro1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Cristian Santa",
            'email' => "cristian@gmail.com",
            'password' => Hash::make('cristian1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Andrea Muñoz",
            'email' => "andrea@gmail.com",
            'password' => Hash::make('andrea1234'),
        ]);
    }
}