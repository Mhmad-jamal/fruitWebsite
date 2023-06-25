<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->limit(11)->get();
        $Category = Category::latest()->limit(2)->get();

        return view('user.welcome')->with("products",$products)->with('Category',$Category);
    }
}
