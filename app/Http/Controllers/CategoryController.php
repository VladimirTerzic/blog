<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show($cat)
    {
        $post = Post::first();

        $x = $post->category;

        dd($x);

        return view('category');
    }
}
