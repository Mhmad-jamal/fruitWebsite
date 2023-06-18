<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

use App\Models\Category;

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
         $validatedData = $request->validate([
            'Category_Name' => 'required|unique:categories',
            'Category_Details' => 'required',
            'Category_Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
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

     public function update(Request $request)
{
    $id=$request->input('id');
    // Validation code and logic to update the category
    $validatedData = $request->validate([
        'Category_Name' => 'required',
        'Category_Details' => 'required',
        'Category_Image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    // Image upload logic
    if ($request->hasFile('Category_Image')) {
        $image = $request->file('Category_Image');
        $imagePath = $image->store('category_images', 'public');
        $category = Category::find($id);
        if ($category) {
            $category->category_name = $request->input('Category_Name');
            $category->category_description = $request->input('Category_Details');
            $category->category_image = $imagePath;
            $category->save();
    
            Alert::success('Categories', 'Category Success Update');
            return Redirect::route('category.edit', $id);
        } 
    } else {
        $category = Category::find($id);
        if ($category) {
            $category->category_name = $request->input('Category_Name');
            $category->category_description = $request->input('Category_Details');
            $category->save();
    
            Alert::success('Categories', 'Category Success Update');
            return Redirect::route('category.edit', $id);
        }     }

    // Example code to update the category
   

}
public function delete($id)
{

    $categories = Category::all();

    $category = Category::find($id);
  
    
        if ($category) {
            $category->delete();
            Alert::success('Categories', 'Category Successfully Deleted');
            return back();
        } else {
            Alert::error('Categories', 'Category Not found');
            return back();
        }
    
        
    
        // Handle the case where the category with the specified $id is not found
        
    
}
    /**
     * Display the specified resource.
     */
     public function allCategories()
    {
        $categories = Category::all();
        return view('admin.Categories.Show_All_categories', ['categories' => $categories]);
        //
    } 

    /**
     * Show the form for editing the specified resource.
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->first();

        return view('admin.Categories.Show_category', ['category' => $category]);

    }
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.Categories.Edit_category', ['category' => $category]);

        //
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
