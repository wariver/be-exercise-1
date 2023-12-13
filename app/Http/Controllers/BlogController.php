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
        $tagline = 'All Blogs';
        return view('welcome', compact('blogs', 'tagline'));
    }

    public function postsByUser($username)
    {
        $user = User::where('username', $username)->first();
        if ($user == '') {
            return redirect('/');
        }
        $blogs = Post::where('user_id', $user->id)->paginate(8);
        $tagline = 'All Blogs by '.$user->name;
        return view('welcome', compact('blogs', 'user','tagline'));
    }

    public function showBlogDetails($username, $slug)
    {
        $user = User::where('username', $username)->first();
        $blog = Post::where('slug', $slug)->first();
        return view('blog-details',compact('blog','user'));
    }
}
