<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StoreController extends Controller
{
    //
    public function index()
    {
        //
        return View::make('store.main')
            ->with('posts', Post::orderBy('created_at', 'desc')->get())
            ->with('categories', Category::all());
    }

    public function getView($id) {
        // 
        return View::make('store.view')
        ->with('post', Post::find($id))
        ->with('categories', Category::all());
    }
    public function getCategory($id) {
        $post = DB::table('posts')->where('category_id', '=', $id)->get();
        $category_index = DB::table('categories')->where('category_id', '=', $id)->get();
        $categories = Category::all();

        return View::make('store.category')
            ->with('posts', $post)
            ->with('categories', $categories);
    }

    public function getSearch(Request $request){
        $keyword = $request->input('keyword');
        $categories = Category::all();

        if ($keyword != ''){
            return View::make('store.search')
                ->with('posts', DB::table('posts')->where('title', 'LIKE', '%'.$keyword.'%')->get())
                ->with('categories', $categories)
                ->with('keyword', $keyword);
        }
    }
}
