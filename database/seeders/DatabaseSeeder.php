<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Api\ItemSubSeeder::class);
        $this->call(Api\ItemMasterSeeder::class);
        $this->call(Api\TransactionSeeder::class);
    }
}
