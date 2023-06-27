<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AboutUsController extends Controller
{
    //
    public function edit()
{
    $about = About::first(); // Retrieve the first About record from the database

    return view('admin.about.edit')->with('about',$about); // Pass the $about variable to the view
}
    public function update(Request $request)
{


    $id = $request->input('id');

    // Validate the incoming request data
    

    $validatedData = $request->validate([
        'first_section_first' => 'required|string',
        'first_section_secound' => 'required|string',
        'first_section_third' => 'required|string',
        'title' => 'required|string',
        'sub_title' => 'required|string',
        'description' => 'required|string',
        'secound_section_first' => 'required|string',
        'secound_section_second' => 'required|string',
        'secound_section_last' => 'required|string',
    ]);
    
    // Find the existing record by its ID
    $about = About::findOrFail($id);
    
    // Update the model with the validated data
    $about->first_section_first = $validatedData['first_section_first'];
    $about->first_section_secound = $validatedData['first_section_secound'];
    $about->first_section_third = $validatedData['first_section_third'];
    $about->title = $validatedData['title'];
    $about->sub_title = $validatedData['sub_title'];
    $about->description = $validatedData['description'];
    $about->secound_section_first = $validatedData['secound_section_first'];
    $about->secound_section_second = $validatedData['secound_section_second'];
    $about->secound_section_last = $validatedData['secound_section_last'];
    
    // Check if an image was uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('about', 'public'); // Store the image in the "about" folder within the "public" disk
    
        // Update the image field
        $about->image = $imagePath;
    }
    
    // Save the updated model to the database
    $about->save();
    Alert::success('success', 'update  About us page success');

    return redirect()->back();
    
}   
}
