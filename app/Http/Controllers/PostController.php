<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('admin/posts/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/posts/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->is_published == 'on') {
            $request['is_published'] = 'yes';
        }else{
            $request['is_published'] = 'no';
        }
        $request['user_id'] = Auth::user()->id;
        Post::create($request->all());
        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin/posts/show',compact('post', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin/posts/edit',compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->is_published == 'on') {
            $request['is_published'] = 'yes';
        }else{
            $request['is_published'] = 'no';
        }

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/admin/posts');
    }
}
