<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{

    protected $table = 'orders_products';

    public function product()
    {
        return $this->belongsTo('app\Models\Product');
    }

}
