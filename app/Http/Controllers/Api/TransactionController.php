<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ItemMaster;
use App\Models\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('itemMaster.subItem')->orderBy('id', 'desc')->get();

        $formattedTransactions = $transactions->map(function ($transaction) {
            return [
                'id' => $transaction->id,
                'invoice_code' => $transaction->invoice_code,
                'item_master_id' => $transaction->item_master_id,
                'date' => $transaction->date,
                'information' => $transaction->information,
                'price' => $transaction->price,
                'qty' => $transaction->qty,
                'item_no' => $transaction->itemMaster->item_no,
                'item_name' => $transaction->itemMaster->item_name,
                'sub_code' => $transaction->itemMaster->subItem->sub_code,
                'sub_name' => $transaction->itemMaster->subItem->sub_name,
            ];
        },);
    
        return  $formattedTransactions;
    }

    public function show($id)
    {
        return Transaction::find($id);
    }

    public function store(Request $request)
    {
        $lastTransaction = Transaction::latest('id')->first();


        if ($lastTransaction) {
            $lastInvoiceCode = $lastTransaction->invoice_code;
            $nextInvoiceNumber = (int) substr($lastInvoiceCode, 3) + 1;
            $request['invoice_code']  = 'INV' . str_pad($nextInvoiceNumber, 4, '0', STR_PAD_LEFT);
        } else {
            $request['invoice_code']  = 'INV0001';
        }

        $item = ItemMaster::findOrfAIL($request['item_id']);




        return   Transaction::create([
            'item_master_id' => $item->id, 
            'invoice_code' =>  $request['invoice_code'],
            'information' => "Pembelian",
            'price' => $request['qty'] *   $item->item_price,
            'qty' =>  $request['qty'],
            'date' => $request['date'],
        ],
      );
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return $transaction;
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return 204;
    }
}
