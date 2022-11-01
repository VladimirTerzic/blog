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
        // $posts = DB::table('posts')->get();
        $posts = Post::all();

        return view('index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post,
        ]);
    }
}
