<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('blog_images');

        $post = BlogPost::create([
            'title' => $validatedData['title'],
            'short_description' => $validatedData['short_description'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
        ]);

        return redirect()->route('blog.posts.show', $post->id)
            ->with('success', 'Blog post created successfully.');
    }

    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('blog.show', ['post' => $post]);
    }
}
