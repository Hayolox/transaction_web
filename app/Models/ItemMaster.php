<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    use HasFactory;

    public function subItem()
    {
        return $this->belongsTo(SubItem::class, 'sub_item_id');
    }
}
