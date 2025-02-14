<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Türker Jöntürk',
                'email' => 'turker@example.com',
                'password' => Hash::make('password'),
                'since' => '2014-06-28',
                'revenue' => '492.12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Kaptan Devopuz',
                'email' => 'kaptan@example.com',
                'password' => Hash::make('password'),
                'since' => '2015-01-15',
                'revenue' => '1505.95',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'İsa Sonuyumaz',
                'email' => 'isa@example.com',
                'password' => Hash::make('password'),
                'since' => '2016-02-11',
                'revenue' => '0.00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
