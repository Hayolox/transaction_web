<?php

namespace Database\Seeders\Api;

use App\Models\ItemMaster;
use Illuminate\Database\Seeder;

class ItemMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemMaster::create([
            'sub_item_id' => '1',
            'item_no' => 'ITM0001',
            'item_name' => 'Product 1',
            'item_price' => 5000.00,
        ]);


        

        ItemMaster::create([
            'sub_item_id' => '2',
            'item_no' => 'ITM0002',
            'item_name' => 'Product 2',
            'item_price' => 7500.00,
        ]);
    }
}
