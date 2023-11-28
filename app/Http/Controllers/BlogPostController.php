<?php

namespace App\Http\Controllers;
use \App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function take()
    {

       $posts = BlogPost::all(); //fetch all blog posts from DB
			return $posts; //returns the fetched posts //
				//return view('blog.blog', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('blog.create'); //
	   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
			
        ]);

        return view('blog.blog'); //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
       return view('blog.show', [
        'post' => $blogPost,
    ]); //returns the fetched posts
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
	return view('blog.edit', [
		'post' => $blogPost,
]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
       $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('blog/blog.show/' . $blogPost->id); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
       $blogPost->delete();

        return view ('welcome'); //
    }
}
