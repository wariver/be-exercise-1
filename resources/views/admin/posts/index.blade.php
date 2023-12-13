@extends('layouts/admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Posts</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S/No</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                          <td>{{$loop->index + 1}}</td>
                          <td>{{$post->title}}</td>
                          <td>{{$post->is_published}}</td>
                          <td>
                            <a href="/admin/posts/{{$post->id}}" type="button" class="btn btn-secondary btn-sm">View</a>
                            <a href="/admin/posts/{{$post->id}}/edit" type="button" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/admin/posts/{{$post->id}}" type="button" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S/No</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Manage</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  </section>
  <!-- /.content -->
  @endsection