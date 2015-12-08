<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersProducts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
//    protected $table = 'orders_products';
//

    public function product()
    {
        return $this->belongsTo('app\Models\Product');
    }

//    public function order()
//    {
//        return $this->belongsTo('app\Models\Order');
//    }

}