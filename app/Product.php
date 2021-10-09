<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";

    protected $fillable = ['category', 'type', 'item', 'price_sell', 'price_agent', 'description'];

    public function cat()
    {
        return $this->belongsTo('App\Category', 'category');
    }

    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail', 'id');
    }
}
