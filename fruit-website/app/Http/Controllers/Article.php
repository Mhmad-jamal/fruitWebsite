<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;

use Illuminate\Http\Request;

class Article extends Controller
{
    //
    public function show($id){
        $article = BlogPost::find($id);
        $lastThreeArticles = BlogPost::latest()->take(3)->get();

        if (!$article) {
            abort(404); // Handle the case when the blog post is not found
        }
    
        return view('user.single_article', ['article' => $article,'lastThreeArticles'=>$lastThreeArticles]);

    }
}
