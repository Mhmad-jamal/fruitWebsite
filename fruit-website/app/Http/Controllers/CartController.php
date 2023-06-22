<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //

    
    public function create(Request $request)
    {

      
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'plan' => 'required',
            'plan_price' => 'required',
            'plan_point' => 'required',
            'quantity'=>'required',
            'total_price'=>'required',

            // Add any other validation rules for the remaining fields
        ]);
        $userId = auth()->user()->id;

  

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            Session::flash('error', 'Validation Error: Please fill in all the required fields.');


         
        }
    
        // Get the authenticated user's ID
  
        // Create a new cart item
        $cartItem = Cart::create([
            'product_id' => $request->input('product_id'),
            'user_id' => $userId,
            'plan' => $request->input('plan'),
            'plan_price' => $request->input('plan_price'),
            'plan_point' => $request->input('plan_point'),
            'quantity'=>$request->input('quantity'),
            'total_price'=>$request->input('total_price'),

        ]);
        Session::flash('success', 'Cart item created successfully.');

return redirect()->back();

}
public function createGift(){
    return view('user.gift');

}
    
    
}
