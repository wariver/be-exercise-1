<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Auth;

class BlogController extends Controller
{
    public function homepage(Request $request)
    {
        $blogs = Post::orderBy('created_at', 'desc')->paginate(8);
        // return $blogs = Post::paginate(8);
        $tagline = 'All Blogs';
        //check if we have category set
        if ($request->category != '') {
            $category = Category::where('name', $request->category)->first();
            if ($category != '') {
                 $blogs = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(8);;
                 $tagline = "All Blogs for ".$category->name;
            }
        }
        return view('welcome', compact('blogs', 'tagline'));
    }

    // public function postsByCategory($category)
    // {
    //     if ($request->category != '') {
    //         $category = Category::where('name', $request->category)->first();
    //         if ($category != '') {
    //              $blogs = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(8);;
    //              $tagline = "All Blogs for ".$category->name;
    //         }
    //     }
    //     return view('welcome', compact('blogs', 'user','tagline'));
    // }
    public function postsByUser($username)
    {
        $user = User::where('username', $username)->first();
        if ($user == '') {
            return redirect('/');
        }
        $blogs = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(8);
        $tagline = 'All Blogs by '.$user->name;
        return view('welcome', compact('blogs', 'user','tagline'));
    }

    public function showBlogDetails($username, $slug)
    {
        $user = User::where('username', $username)->first();
        $blog = Post::where('slug', $slug)->first();
        $comments = Comment::where('post_id', $blog->id)->orderBy('created_at', 'desc')->get();
        //update the views count
        $blog->views_count ++;
        $blog->save();
        return view('blog-details',compact('blog','user','comments'));
    }

    public function addPostComment(Request $request)
    {
        $request['user_id'] =  Auth::user()->id;
        Comment::create($request->all());
        $post = Post::find($request->post_id);
        return redirect('/'.$post->user->username.'/'.$post->slug);
    }
}
