<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
        $request->session()->flash('error', '');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Contactus::create($validator->getData());

        $request->session()->flash('success', 'Thank you for your message!');
    
        return redirect()->back();
    }
}
