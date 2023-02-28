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
        <form action="{{ route('category.store') }}" method="POST">
        @csrf
          <div class="form-group">
          <div style="height: 2vh"></div>
            <label for="name-category">Name</label>
            <div style="height: 2vh"></div>
              <input type="text" class="form-control" id="create-category" placeholder="Enter name" name='name' />
          </div>
          <div style="height: 2vh"></div>
          <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>
  </div>
  <div style="height: 50vh"></div>
@endsection