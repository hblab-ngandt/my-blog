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
                <a class="nav-link" href="#">All Category<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create">Create new category</a>
              </li>
            </ul>
          </div>
        </nav>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="create-category" aria-describedby="emailHelp" placeholder="Enter name">
          </div>
          <div style="height: 2vh"></div>
          <button type="submit" class="btn btn-primary">Create</button>
          </form>
      </div>
  </div>
  <div style="height: 50vh"></div>
@endsection