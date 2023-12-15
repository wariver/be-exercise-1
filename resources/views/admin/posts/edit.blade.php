@extends('layouts/admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Post</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
              <!-- /.card-header -->
              <form action="/admin/posts/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" style="margin-bottom:10px" placeholder="Enter the post title..." value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category" >
                      @foreach ($categories as $category)
                      <option {{$post->category_id == $category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Main Content</label>
                    <textarea id="summernote" name="content" class="form-control">
                      {{$post->content}}
                    </textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="tags">Tags</label>
                    <select multiple="" class="form-control" name="tags" id="tags">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                </div> --}}
                <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="is_published" {{$post->is_published == 'yes' ? 'checked':''}}>
                      <label class="form-check-label">Is Published</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  </section>
  <!-- /.content -->
  @endsection