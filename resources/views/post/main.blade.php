@extends('admin.main')

@section('content')
  <h1 class="mt-4">Post</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
      <li class="breadcrumb-item active">Static Navigation</li>
  </ol>
  <div class="card mb-4">
      <div class="card-body">
        <nav class="sb-topnav navbar navbar-expand navbar-dark">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a href="post" class="btn btn-primary">All Post</a>
              </li>
            </ul>
          </div>
          <div class="justify-content-end">
          <a href="post/create" class="btn btn-success">New Post</a>
        </div>
        </nav>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ $post->author }}</td>
              <td>{{ $post->created_at }}</td>
              <td>
              <form action="{{ route('post.destroy', $post->id) }}" method="post">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a>
                
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
  <div style="height: 100vh"></div>
  <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
@stop
