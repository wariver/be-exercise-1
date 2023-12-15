@extends('layouts/website')
@section('page-title')
  <div class="hero overlay inner-page bg-primary py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">{{$tagline}}</h1>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('main-content')
  @foreach ($blogs as $blog)  
  <div class="blog-entry d-flex blog-entry-search-item">
    <a href="/{{$blog->user->username}}/{{$blog->slug}}" class="img-link me-4">
      @if ($blog->getFirstMediaUrl('images', 'thumb') != '')
      <img src="{{$blog->getFirstMediaUrl('images', 'thumb')}}" alt="Image" class="img-fluid">
      @else 
      <img src="/website/images/img_2_sq.jpg" alt="Image" class="img-fluid">
      @endif
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">{{$blog->category->name}}</a></span>
      <h2><a href="/{{$blog->user->username}}/{{$blog->slug}}">{{$blog->title}}</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="/{{$blog->user->username}}/{{$blog->slug}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>
  @endforeach
  <div class="row text-start pt-5 border-top">
    <div class="col-md-12">
      <span>{{$blogs->links('pagination::bootstrap-5')}}</span>
    </div>
  </div>
@endsection