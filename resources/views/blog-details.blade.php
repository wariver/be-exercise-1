@extends('layouts/website')
@section('page-title')
<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{$blog->getFirstMediaUrl('images', 'thumb') !=''? $blog->getFirstMediaUrl('images', 'thumb'): '/website/images/hero_5.jpg'}});">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{$blog->title}}</h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="/website/images/person_1.jpg" alt="Image" class="img-fluid"></figure>
              <a href="/{{$blog->user->username}}" type="button" class="btn btn-info btn-sm"><span>By {{$blog->user->name}}</span></a>
              <span>&nbsp;-&nbsp; {{$blog->created_at->format('F j, Y')}}</span> | {{$blog->views_count}} Views
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('main-content')

<div class="post-content-body">
    <span>{{$blog->content}}</span>
</div>


<div class="pt-5">
<p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
</div>


<div class="pt-5 comment-wrap">
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="/comment" class="p-5 bg-light" method="POST">
        @csrf
    <div class="form-group">
        <label for="message">Message</label>
        <textarea  id="message" cols="30" rows="10" class="form-control" name="message" required></textarea>
        <input  id="post_id"  class="form-control" name="post_id" value="{{$blog->id}}" hidden/>
    </div>
    <div class="form-group">
        <input type="submit" value="Post Comment" class="btn btn-primary">
    </div>

    </form>
</div>
<h3 class="mb-2 mt-2 heading">{{$comments->count()}} Comments</h3>
<ul class="comment-list">
    @foreach ($comments as $comment)
        
    <li class="comment">
    <div class="vcard">
        <img src="/website/images/person_2.jpg" alt="Image placeholder">
    </div>
    <div class="comment-body">
        <h3>{{$comment->user->name}}</h3>
        <div class="meta">{{$comment->created_at->format('F j, Y \a\t g:ia')}}</div>
        <p>{{$comment->message}}</p>
    </div>

    {{-- <ul class="children">
        <li class="comment">
        <div class="vcard">
            <img src="/website/images/person_3.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
            <h3>Jean Doe</h3>
            <div class="meta">January 9, 2018 at 2:21pm</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
            <p><a href="#" class="reply rounded">Reply</a></p>
        </div>
        </li>
    </ul> --}}
    </li>
    @endforeach
</ul>
<!-- END comment-list -->
</div>

@endsection