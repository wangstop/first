<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_detail';


    protected $fillable = [
        'id','order_id','product_id','qty','price',

    ];
}
