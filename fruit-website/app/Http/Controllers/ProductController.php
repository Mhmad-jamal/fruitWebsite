<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
    
        return view('user.Product', ['product' => $product]);
    }

    public function edit($id)
    {
        // Retrieve the product from the database
        $product = Product::find($id);
    
        // Check if the product exists
        if (!$product) {
            // Product not found, handle the error (e.g., redirect back with an error message)
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        // Pass the product data to the view
        $categories = Category::all();

        return view('admin.Product.Edit_Product', ['product' => $product,'categories'=>$categories]);
    }
    public function delete($id)
    {
        // Retrieve the product from the database
        $product = Product::find($id);
    
        // Check if the product exists
        if (!$product) {
            // Product not found, handle the error (e.g., redirect back with an error message)
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        // Delete the product
        $product->delete();
    
        // Set a success message (e.g., using a package like 'laravel-sweetalert')
        Alert::success('Product', 'Product successfully deleted!');
    
        // Redirect back to the previous page
        return redirect()->back();
    }
    
    public function view($id)
    {
        // Retrieve the product from the database
        $product = Product::find($id);
    
        // Check if the product exists
        if (!$product) {
            // Product not found, handle the error (e.g., redirect back with an error message)
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        // Pass the product data to the view
        $categories = Category::all();

        return view('admin.Product.Details_Product', ['product' => $product,'categories'=>$categories]);
    }
    public function store(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'Category_id' => 'required|exists:categories,id',
        'Product_Name' => 'required',
        'Product_Details' => 'required',
        'Product_Contain' => 'required',
        'One_Time_Price' => 'required',
        'One_Time_Point' => 'required',
        'Weekly_Price' => 'required',
        'Weekly_Point' => 'required',
        'Monthly_Price' => 'required',
        'Monthly_Point' => 'required',
        'Product_Image' => 'required|image',
    ]);

    // Handle validation errors
    if ($validator->fails()) {
        Alert::error('Validation Error', 'Please check the form and correct any errors.')->autoClose(false);
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Handle the uploaded image
    $imagePath = $request->file('Product_Image')->store('product_images', 'public');

    // Create a new product instance
    $product = new Product;
    $product->Category_id = $request->Category_id;
    $product->Product_Name = $request->Product_Name;
    $product->Product_Details = $request->Product_Details;
    $product->Product_Contain = $request->Product_Contain;
    $product->One_Time_Price = $request->One_Time_Price;
    $product->One_Time_Point = $request->One_Time_Point;
    $product->Weekly_Price = $request->Weekly_Price;
    $product->Weekly_Point = $request->Weekly_Point;
    $product->Monthly_Price = $request->Monthly_Price;
    $product->Monthly_Point = $request->Monthly_Point;
    $product->Product_Image = $imagePath;
    $product->save();

    // Show success alert
    Alert::success('Product', 'Product successfully added!');

    // Redirect back to the previous page
    return redirect()->back();
}
public function update(Request $request)
{
    $id=$request->input('id');
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'Category_id' => 'required|exists:categories,id',
        'Product_Name' => 'required',
        'Product_Details' => 'required',
        'Product_Contain' => 'required',
        'One_Time_Price' => 'required',
        'One_Time_Point' => 'required',
        'Weekly_Price' => 'required',
        'Weekly_Point' => 'required',
        'Monthly_Price' => 'required',
        'Monthly_Point' => 'required',
        'Product_Image' => 'image',
    ]);

    // Handle validation errors
    if ($validator->fails()) {
        Alert::error('Validation Error', 'Please check the form and correct any errors.')->autoClose(false);
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Find the existing product
    $product = Product::find($id);
    if (!$product) {
        return redirect()->back()->withErrors('Product not found.');
    }

    // Update the product values
    $product->Category_id = $request->Category_id;
    $product->Product_Name = $request->Product_Name;
    $product->Product_Details = $request->Product_Details;
    $product->Product_Contain = $request->Product_Contain;
    $product->One_Time_Price = $request->One_Time_Price;
    $product->One_Time_Point = $request->One_Time_Point;
    $product->Weekly_Price = $request->Weekly_Price;
    $product->Weekly_Point = $request->Weekly_Point;
    $product->Monthly_Price = $request->Monthly_Price;
    $product->Monthly_Point = $request->Monthly_Point;

    // Handle the uploaded image
    if ($request->hasFile('Product_Image')) {
        $imagePath = $request->file('Product_Image')->store('product_images', 'public');
        $product->Product_Image = $imagePath;
    }

    // Save the updated product
    $product->save();

    // Show success alert
    Alert::success('Product', 'Product successfully updated!');

    // Redirect back to the previous page
    return redirect()->back();
}

}
