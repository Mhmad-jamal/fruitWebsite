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
public function view($id)
    {
        $Gift = Gift::find($id);
    
        return view('admin.Gift.details', ['Gift' => $Gift]);
    }
}
