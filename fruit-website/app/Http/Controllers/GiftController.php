<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Models\Gift;

class GiftController extends Controller
{
    public function store(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'Gift_Name' => 'required',
        'Gift_Price' => 'required',

        'Gift_Image' => 'required|image',
    ]);

    // Handle validation errors
    if ($validator->fails()) {
        Alert::error('Validation Error', 'Please check the form and correct any errors.')->autoClose(false);
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Handle the uploaded image
    $imagePath = $request->file('Gift_Image')->store('Gift_Image', 'public');

    // Create a new gift instance
    $gift = new Gift;
    $gift->name = $request->Gift_Name;
  $gift->price=$request->Gift_Price;
    $gift->image = $imagePath;
    $gift->save();

    // Show success alert
    Alert::success('gift', 'gift successfully added!');

    // Redirect back to the previous page
    return redirect()->back();
}
public function update(Request $request){
    $validator = Validator::make($request->all(), [
        'Gift_Name' => 'required',
        'Gift_Price' => 'required',
        'Gift_Image' => 'image',
    ]);
    
    // Handle validation errors
    if ($validator->fails()) {
        Alert::error('Validation Error', 'Please check the form and correct any errors.')->autoClose(false);
        return redirect()->back()->withErrors($validator)->withInput();
    }
    
    // Find the gift by ID
    $gift = Gift::find($request->id);
    
    if (!$gift) {
        Alert::error('Gift not found', 'The gift you want to edit does not exist.')->autoClose(false);
        return redirect()->back();
    }
    
    // Update the gift properties
    $gift->name = $request->Gift_Name;
    $gift->price = $request->Gift_Price;
    
    if ($request->hasFile('Gift_Image')) {
        // Handle the uploaded image
        $imagePath = $request->file('Gift_Image')->store('Gift_Image', 'public');
        $gift->image = $imagePath;
    }
    
    $gift->save();
    
    // Show success alert
    Alert::success('Gift', 'Gift successfully updated!');
    
    // Redirect back to the previous page
    return redirect()->back();
    
}
public function delete($id)
{
    // Find the gift by ID
    $gift = Gift::find($id);

    if (!$gift) {
        Alert::error('Gift not found', 'The gift you want to delete does not exist.')->autoClose(false);
        return redirect()->back();
    }

    // Delete the gift
    $gift->delete();

    // Show success alert
    Alert::success('Gift', 'Gift successfully deleted!');

    // Redirect back to the previous page
    return redirect()->back();
}
public function view($id)
    {
        $Gift = Gift::find($id);
    
        return view('admin.Gift.details', ['Gift' => $Gift]);
    }
    public function edit($id)
    {
        $Gift = Gift::find($id);
    
        return view('admin.Gift.edit', ['Gift' => $Gift]);
    }
}
