<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('designations')->insert([
            ['name' => 'Marketing Manager', 'created_at' => now()],
            ['name' => 'Mobile Application Dev', 'created_at' => now()],
            ['name' => 'Designer', 'created_at' => now()],
        ]);
    }
}
