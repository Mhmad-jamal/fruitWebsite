<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    //
    public function show($id){
        return view('user.single_article');


    }
}
