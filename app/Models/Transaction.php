<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_code',
        'item_master_id',
        'date',
        'information',
        'price',
        'qty',
      
    ];

    public function itemMaster()
        {
            return $this->belongsTo(ItemMaster::class, 'item_master_id');
        }
}
