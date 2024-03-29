<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Gift;
use App\Models\CartGift;



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

            return redirect()->back();

         
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
    $Gifts = Gift::all();

    return view('user.gift')->with('gifts',$Gifts);


}
public function StoreGift(Request $request) {
    
      
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'gift_id' => 'required',
            'price' => 'required',
            

            // Add any other validation rules for the remaining fields
        ]);
        $userId = auth()->user()->id;

 

        // If validation fails, redirect back with error messages
        if ($validator->fails()) {
            Session::flash('error', 'Validation Error: Please fill in all the required fields.');
            return redirect()->back();


         
        }
    
        // Get the authenticated user's ID
  
        // Create a new cart item
        $cartItem = CartGift::create([
            'gift_id' => $request->input('gift_id'),
            'user_id' => $userId,
            'price'=>$request->input('price'),

        ]);
        Session::flash('success', 'Gift item created successfully.');
        return redirect()->back();

}
public function view() {
    $userId = auth()->user()->id;

    $Cart = Cart::join('products', 'Cart.product_id', '=', 'products.id')
    ->where('Cart.user_id', $userId)
    ->get(['Cart.*', 'products.product_name','products.product_details','products.product_image']);
$gift=CartGift::join('gift', 'cart_gifts.gift_id', '=', 'gift.id')
->where('cart_gifts.user_id', $userId)
->get(['cart_gifts.*', 'gift.name','gift.image']);
return view('user.Allcart')->with('cart', $Cart)->with('gift', $gift);

    
}
public function deleteCart($id)  {
    $cart = Cart::findOrFail($id);
    $cart->delete();
    Session::flash('success', 'Cart item Deleted successfully.');
    return redirect()->back(); 
}
public function deletegift($id) {
    
    $gift = CartGift::findOrFail($id);
    $gift->delete();
    Session::flash('success', 'Gift item Deleted successfully.');
    return redirect()->back(); 
}
    
    
}
