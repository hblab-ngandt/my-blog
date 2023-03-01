<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return View::make('post.main')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();

        return View::make('post.create')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'short_desc' => 'required',
            'description' => 'required',
        ]);
      
        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'image' => $request->file('image')->store('public/images'),
            'short_desc' => $request->short_desc,
            'description' => $request->description,
        ]);

        return redirect('/post')->with('success', 'Post updated successfully');
        // $this->validate(request(), [
        //     'category_id' => 'required|integer',
        //     'title' => 'required',
        //     'author' => 'required',
        //     'image' => 'required|mimes:jpg,jpeg,png',
        //     'short_desc' => 'required',
        //     'description' => 'required',
        // ]);
        
        // $post = new Post;
        // $post->category_id = request('category_id');
        // $post->title = request('title');
        // $post->author = request('author');
        // $post->image = request()->file('image')->store('public/images');
        // $post->short_desc = request('short_desc');
        // $post->description = request('description');
        // $post->save();
        
        // return redirect('/post');
    
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
    public function destroy(Post $post)
    {
        //
        $post->delete();
        
        return redirect('/post')->with('success', 'Post deleted successfully');
    }
}
