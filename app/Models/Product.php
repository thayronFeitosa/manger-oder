<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'name', 'sequence', 'quantitySold', 'quantityDelivered', 'field1', 'field2', 'field3', 'id_order'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }
}
