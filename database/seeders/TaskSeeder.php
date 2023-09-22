<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'name' => 'Task 1 ' . Str::random(7),
            'description' => Str::random(20),
            'user_id' => 1,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Task 2 ' . Str::random(7),
            'description' => Str::random(20),
            'user_id' => 1,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Task 3 ' . Str::random(7),
            'description' => Str::random(20),
            'user_id' => 1,
        ]);
    }
}
