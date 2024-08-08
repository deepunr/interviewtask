<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the specific seeders
        $this->call([
            DesignationSeeder::class,
            DepartmentSeeder::class,
            UserSeeder::class,
        ]);
    }
}
