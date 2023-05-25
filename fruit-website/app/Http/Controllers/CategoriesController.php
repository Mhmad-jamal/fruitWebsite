<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            $category->category_image = $imagePath;
        }
    
        // Example code to create a new category
        $category = new Category();
        $category->category_name = $request->input('Category_Name');
        $category->category_description = $request->input('Category_Details');
        $category->save();
    
        // Redirect or return a response
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
