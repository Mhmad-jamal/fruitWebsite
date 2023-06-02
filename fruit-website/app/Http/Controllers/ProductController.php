<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function show($id)
    public function show($id)
    {
        return view('user.Product', ['id' => $id]);
    }
}
