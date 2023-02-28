@extends('admin.main')

@section('content')
  <h1 class="mt-4">Post</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  </ol>
  <div class="card mb-4">
      <div class="card-body">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/post">All Post<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <div style="height: 2vh"></div>
            <label for="title-post">Title</label>
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="create-post" placeholder="Enter title" name='title' />
          </div>
          <div class="form-group">
            <div style="height: 2vh"></div>
            <label for="author-post">Author</label>
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="create-post" placeholder="Enter author" name='author' />
          </div>
          <div class="form-group mb-3"">
            <div style="height: 2vh"></div>
            <label for="category-post">Category</label>
            <div style="height: 2vh"></div>
            <select class="custom-select" id="inputGroupSelect01" name="category_id" >
              @foreach ($categories as $category)
              {
                <option value="$category">{{ $category->name }}</option>
              }
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <div style="height: 2vh"></div>
            <label for="author-post">Image</label>
            <div style="height: 2vh"></div>
              <input type="file" class="form-control" accept="image/*" name="image" />
          </div>
          <div class="form-group">
            <div style="height: 2vh"></div>
            <label for="short-description-post">Short description</label>
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="create-post" placeholder="Enter short-desc" name='short_desc' />
          </div>
          <div class="form-group">
            <div style="height: 2vh"></div>
            <label for="description-post">Description</label>
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="create-post" placeholder="Enter description " name='description' />
          </div>
          <div style="height: 2vh"></div>
          <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>
  </div>
  <div style="height: 50vh"></div>
@endsection