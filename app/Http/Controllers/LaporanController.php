<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Category;
use App\Customer;
use App\Agent;

class LaporanController extends Controller
{
    public function index(Request $request) 
    {
        if($request->start != null && $request->end != null) {
            $start = $request->start;
            $end = $request->end;
        } else {
            $start = "01/".date('m/Y');
            $end = "31/".date('m/Y');
        }
        $tanggalAwal = explode('/', $start);
        $tanggalAkhir = explode('/', $end);
        $order = count(Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->get());
        $item = count(Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->with('orderDetail')->distinct('product_id')->get());
        $qty = Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->with('orderDetail')->get()->sum('qty');
        $ongkir = Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->sum('delivery_fee');
        $diskon = Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->sum('payment_discount');
        $pembayaran = Order::where([['order_time', '>=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 00:00:00"], ['order_time', '<=', $tanggalAwal[2]."-".$tanggalAwal[1]."-".$tanggalAwal[0]." 23:59:59"]])->sum('payment_final');
        return view('/laporan', ['order' => $order, 'item' => $item, 'qty' => $qty, 'ongkir' => $ongkir, 'diskon' => $diskon, 'pembayaran' => $pembayaran]);
    }
    
    public function customer() 
    {
        $customer = Order::with('customer')->paginate(10);
        return view('/laporan/customer', ['customer' => $customer]);
    }

    public function agent() 
    {
        $agent = Agent::with('order')->get();
        return view('/laporan/agent', ['agent' => $agent]);
    }
    
    public function item() 
    {
        $product = Product::with('orderDetail.order')->paginate(10);
        return view('/laporan/item', ['product' => $product]);
    }
    
    public function category() 
    {
        $category = Category::all();
        return view('/laporan/category', ['category' => $category]);
    }
    
    public function top() 
    {
        $product = Product::with('orderDetail')->get()->sortByDesc(function($product){return $product->orderDetail->count();})->take(10);
        $customer = Customer::with('order')->get()->sortByDesc(function($customer){return $customer->order->count();})->take(10);
        $agent = Agent::with('order')->get()->sortByDesc(function($agent){return $agent->order->count();})->take(10);
        return view('/laporan/top', ['product' => $product, 'customer' => $customer, 'agent' => $agent]);
    }
    
    public function detail() 
    {
        return view('/laporan/detail');
    }
    
    public function detailAgent() 
    {
        return view('/laporan/detailAgent');
    }
    
    public function detailItem() 
    {
        return view('/laporan/detailItem');
    }
    
    public function detailCategory($id, Request $request) 
    {
        if($request->start != null && $request->end != null) {
            $start = $request->start;
            $end = $request->end;
        } else {
            $start = "01/".date('m/Y');
            $end = "31/".date('m/Y');
        }
        $tanggalAwal = explode('/', $start);
        $tanggalAkhir = explode('/', $end);
        $category = Category::with('product.orderDetail.order')->get();
        return view('/laporan/detailCategory');
    }
}
