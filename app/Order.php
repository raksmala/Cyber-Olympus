<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $primaryKey = "id";

    protected $fillable = ['name'];

    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail', 'id');
    }

    public function agent()
    {
        return $this->belongsTo('App\Agent', 'agent_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
}
