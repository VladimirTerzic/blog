<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('category', 'author');
        
        if (request('search')) {
            $posts
            ->where('title', 'like', '%'. request('search') .'%')
            ->orWhere('description', 'like', '%'. request('search') .'%');
        }
        

        return view('index', [
            'posts' => $posts->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post,
        ]);
    }
}
