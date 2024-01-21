<?php

namespace Database\Seeders\Api;

use App\Models\Transaction;
use App\Models\TransactionModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'item_master_id' => 1, 
            'invoice_code' => "INV0001",
            'information' => "Pembelian",
            'price' => 5000.00,
            'qty' => 1,
            'date' => Carbon::now(),
        ]);

        Transaction::create([
            'item_master_id' => 2, 
            'invoice_code' => "INV0002",
            'information' => "Pembelian",
            'price' => 7500.00,
            'qty' => 1,
            'date' => Carbon::now(),
        ]);
    }
}
