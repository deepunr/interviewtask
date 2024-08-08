<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'John Due', 'fk_department' => 1, 'fk_designation' => 1, 'phone_number' => '9526296621', 'created_at' => now()],
            ['name' => 'Tommy Mark', 'fk_department' => 2, 'fk_designation' => 2, 'phone_number' => '0987654321', 'created_at' => now()],
            ['name' => 'Deepu', 'fk_department' => 3, 'fk_designation' => 3, 'phone_number' => '1122334455', 'created_at' => now()],
        ]);
    }
}
