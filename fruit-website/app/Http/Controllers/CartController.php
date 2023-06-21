<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;

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
            // Add any other validation rules for the remaining fields
        ]);
    
        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            Alert::error('Validation Error', 'Please fill in all the required fields.')
                ->persistent(false)
                ->autoClose(5000);

            return redirect()->back();
        }
    
        // Get the authenticated user's ID
        $userId = auth()->user()->id;
    
        // Create a new cart item
        $cartItem = Cart::create([
            'product_id' => $request->input('product_id'),
            'user_id' => $userId,
            'plan' => $request->input('plan'),
            'plan_price' => $request->input('plan_price'),
            'plan_point' => $request->input('plan_point'),
        ]);
    
        Alert::success('Product', 'Product Successfully Added To Cart!')->autoClose(5000);
        return view('user.gift');
    }
    
    
}
