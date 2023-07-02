<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class AdminOrderController extends Controller
{
  public function getorders()
    {
        $orders = Orders::join('users', 'users.id', '=', 'orders.user_id')
        ->leftJoin('gift', function ($join) {
            $join->on('gift.id', '=', 'orders.product_id')
                 ->where('orders.type', '=', 'gift');
        })
        ->leftJoin('products', function ($join) {
            $join->on('products.id', '=', 'orders.product_id')
                 ->where('orders.type', '!=', 'gift');
        })
        ->select('orders.*', 'users.name as user_name','users.phone as user_phone', 'products.product_name as product_name', 'gift.name as gift_name')
        ->get();
     
   return view('admin.order.view')->with('orders',$orders);
    }
}
