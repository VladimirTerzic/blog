<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $cat)
    {
        // $post = Post::first();

        // $category = $post->category;

        return view('category', ['category' =>  $cat]);
    }
}
