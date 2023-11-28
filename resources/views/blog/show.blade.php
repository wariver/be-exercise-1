@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog/blog" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p> 
                <hr>
                <a href="/blog/blog.edit/{{ $post->id }}" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="{{route('blog.destroy', [$post->id])}}" method="get">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type = "submit" name = "delete">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection