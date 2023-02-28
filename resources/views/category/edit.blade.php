@extends('admin.main')

@section('content')
  <h1 class="mt-4">Category</h1>
  <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  </ol>
  <div class="card mb-4">
      <div class="card-body">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/category">All Category<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="form-group">
          <div style="height: 2vh"></div>
            <h3>Edit category</h3>
          <div style="height: 2vh"></div>
            <label for="name-category">Name</label> 
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="edit-category" placeholder="New name" name='name' value="{{ $category->name }}"/>
          </div>
          <div style="height: 2vh"></div>
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('category.index') }}" class="btn btn-danger">Cancel</a>
          </form>
      </div>
  </div>
  <div style="height: 50vh"></div>
@endsection