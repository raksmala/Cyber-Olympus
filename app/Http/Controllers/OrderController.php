<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Agent;

class OrderController extends Controller
{
    public function index() 
    {
        $order = OrderDetail::with('order')->paginate(10);
        return view('/order', ['order' => $order]);
    }
}
