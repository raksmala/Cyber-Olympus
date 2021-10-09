<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "id";

    protected $fillable = ['address'];

    public function order()
    {
        return $this->hasMany('App\Order', 'id');
    }
}
