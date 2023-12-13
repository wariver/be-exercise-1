@extends('layouts/website')
@section('page-title')
  <div class="hero overlay inner-page bg-primary py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">Welcome to Our Website</h1>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('main-content')
<div class="blog-entry d-flex blog-entry-search-item">
    <a href="single.html" class="img-link me-4">
      <img src="website/images/img_1_sq.jpg" alt="Image" class="img-fluid">
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
      <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>

  <div class="blog-entry d-flex blog-entry-search-item">
    <a href="single.html" class="img-link me-4">
      <img src="website/images/img_2_sq.jpg" alt="Image" class="img-fluid">
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
      <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>

  <div class="blog-entry d-flex blog-entry-search-item">
    <a href="single.html" class="img-link me-4">
      <img src="website/images/img_3_sq.jpg" alt="Image" class="img-fluid">
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
      <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>

  <div class="blog-entry d-flex blog-entry-search-item">
    <a href="single.html" class="img-link me-4">
      <img src="website/images/img_4_sq.jpg" alt="Image" class="img-fluid">
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
      <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>

  <div class="blog-entry d-flex blog-entry-search-item">
    <a href="single.html" class="img-link me-4">
      <img src="website/images/img_5_sq.jpg" alt="Image" class="img-fluid">
    </a>
    <div>
      <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
      <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
      <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
    </div>
  </div>

  <div class="row text-start pt-5 border-top">
    <div class="col-md-12">
      <div class="custom-pagination">
        <span>1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <span>...</span>
        <a href="#">15</a>
      </div>
    </div>
  </div>
@endsection