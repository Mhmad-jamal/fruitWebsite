<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
 

     public function store(Request $request)
     {
         // Validation code and logic to store the category
     
         // Image upload logic
         if ($request->hasFile('Category_Image')) {
             $image = $request->file('Category_Image');
             $imagePath = $image->store('category_images', 'public');
         } else {
             $imagePath = null; // Or provide a default image path if necessary
         }
     
         // Example code to create a new category
         $category = new Category();
         $category->category_name = $request->input('Category_Name');
         $category->category_description = $request->input('Category_Details');
         $category->category_image = $imagePath;
         $category->save();
     
         Alert::success('Categories', 'Category Success Add');
         return Redirect::route('categories.add')->with('success', 'Category created successfully!');

         // Redirect or return a response
     }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categories = Category::all();
        return view('admin.Categories.Show_categories', ['categories' => $categories]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
