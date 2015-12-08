<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Relations with Order Table
    public function order()
    {
        return $this->belongsToMany('app\Models\Order', 'orders_products');
    }

    // Define Many-Many relation with OrderProduct Table
    public function ordersProducts()
    {
        return $this->hasMany('app\Models\OrdersProducts');
    }


}
