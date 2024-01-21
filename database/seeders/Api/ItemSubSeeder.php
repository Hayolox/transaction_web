<?php

namespace Database\Seeders\Api;

use App\Models\subItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        subItem::create([
            'sub_code' => 'UTM0001',
            'sub_name' => 'prodcut sub 1',
         
        ]);

        subItem::create([
            'sub_code' => 'UTM0002',
            'sub_name' => 'prodcut sub 2',
          
        ]);
    }
}
