<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StoreController extends Controller
{
    //
    public function index()
    {
        //
        $categories = Category::all();
        return View::make('store.main')
            ->with('posts', Post::orderBy('created_at', 'desc')->get())
            ->with('categories', $categories);
    }

    public function getView($id) {
        return View::make('store.view')->with('post', Post::find($id));
    }
    
}
