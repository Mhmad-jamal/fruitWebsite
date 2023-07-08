<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class BlogPostController extends Controller
{
    public function index()
    {
        $articles = BlogPost::all();
        return view('blog.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $validatedData = $validator->validated();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        } else {
            $imagePath = null;
        }
    
        $post = BlogPost::create([
            'title' => $validatedData['title'],
            'short_description' => $validatedData['short_description'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
        ]);
    
        if ($post) {
            Alert::success('Article', 'Article successfully created!');
            return redirect()->back();
        } else {
            Alert::error('Error', 'Failed to Create article!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
    

    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('blog.show', ['post' => $post]);
    }
    public function edit($id)
{
    $article = BlogPost::find($id);

    if (!$article) {
        abort(404); // Handle the case when the article is not found
    }

    return view('blog.edit', ['article' => $article]);
}
public function view($id)
{
    $article = BlogPost::find($id);

    if (!$article) {
        abort(404); // Handle the case when the article is not found
    }

    return view('blog.view', ['article' => $article]);
}

public function update(Request $request)
    {
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
        ]);
        
        
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $validatedData = $validator->validated();
    
        $article = BlogPost::find($id);
    
        if (!$article) {
            abort(404); // Handle the case when the article is not found
        }
    
        $article->title = $validatedData['title'];
        $article->short_description = $validatedData['short_description'];
        $article->content = $validatedData['content'];
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $article->image = $imagePath;
        }
    
        $post = $article->save();
    
        if ($post) {
            Alert::success('Article', 'Article successfully updated!');
            return redirect()->back();
        } else {
            Alert::error('Error', 'Failed to update article!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
    
    public function destroy($id)
    {
        $article = BlogPost::find($id);
    
        if (!$article) {
            abort(404); // Handle the case when the article is not found
        }
    
        $article->delete();
    
        Alert::success('Article', 'Article successfully deleted!');
        return redirect()->back();
    }
    

}
