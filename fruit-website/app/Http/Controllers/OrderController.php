<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 


class OrderController extends Controller
{
    public function create(Request $request)
    {

        $orders = $request->input('orders');

      
foreach ($orders as $orderData) {
    $order = new Orders();
    $order->price = $orderData['price'];
    $order->product_id = $orderData['product_id'];
    $order->plan = $orderData['plan'];
    $order->type=$orderData["type"];
    $order->quantity = $orderData['quantity'];

    // Get the authenticated user's ID
    $order->user_id = Auth::id();

    $order->save();
}

return response()->json(['success' => true]);
    }
    //
}
