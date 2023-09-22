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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@todo-app.com',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Default user',
            'email' => Str::random(7).'@todo-app.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
