<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function homepage()
    {
        $blogs = Post::paginate(8);
        // return $blogs = Post::paginate(8);
        return view('welcome', compact('blogs'));
    }

    public function postsByUser($username)
    {
        return 'yess';
    }

    public function showBlogDetails($username, $slug)
    {
        $user = User::where('username', $username)->first();
        $blog = Post::where('slug', $slug)->first();
        return view('blog-details',compact('blog','user'));
    }
}
