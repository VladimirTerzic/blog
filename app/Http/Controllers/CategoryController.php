<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Request $request, $cat)
    {
        return view('category');
    }
}
