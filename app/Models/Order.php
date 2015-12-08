<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'product_id'];

    // Define Relation with Product Table
    public function product()
    {
//        return $this->belongsToMany('app\Models\Product', 'app\Models\OrderProduct', 'order_id', 'product_id');
        return $this->belongsToMany('app\Models\Product', 'orders_products');
    }

    public function ordersproducts()
    {
        return $this->hasMany('app\Models\OrdersProducts');

    }

    // Define Many-Many relation with OrderProduct Table
//    public function orderProduct()
//    {
//        return $this->hasMany('app\Models\OrdersProducts');
//    }

    // Get orders Query
    public static function getOrders()
    {
        $orders = Order::
        with(
//            'ordersproducts'
            'ordersproducts.product'
//            array('product'=>function($query){
//            $query->select('name');
//                })
            )->
        get();
//print_r($orders);die();
        return $orders;
    }
}
