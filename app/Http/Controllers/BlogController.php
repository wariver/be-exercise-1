<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function homepage()
    {
        $blogs = Post::paginate(8);
        // return $blogs = Post::paginate(8);
        return view('welcome', compact('blogs'));
    }
}
