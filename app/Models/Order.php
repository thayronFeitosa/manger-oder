<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['code', 'reference'];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_order');
    }
}
