<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_detail";
    protected $primaryKey = "id";

    protected $fillable = ['product_id'];

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
