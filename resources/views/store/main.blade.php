@extends('welcome')

@section('content')
<div class="row">
  <div class="col-lg-8">
      <!-- Post content-->
      <article>
        <!-- Post header-->
        @foreach ($posts as $post)
        <header class="mb-4">
          <!-- Post title-->
          <a href="/store/view/{{$post->id}}"  class="text-decoration-none" >
            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
          </a>
          <!-- Post meta content-->
          <div class="text-muted fst-italic mb-2">Posted on {{ $post->created_at }} by {{ $post->author }}</div>
          <!-- Post categories-->
          <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
          <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
        </header>
        <!-- Preview image figure-->
        <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('public/images/' .$post->image) }}" alt="..." width="200" /></figure>
        <!-- Post content-->
        <section class="mb-5">
          <h3 class="fw-bolder mb-4 mt-5">{{ $post->short_desc }}</h3>
          <p class="fs-5 mb-4">{{ $post->description }}</p>
        </section>
        @endforeach
      </article>

      <nav aria-label="Pagination">
        <div class="d-flex justify-content-center">
        {!! $posts->links() !!}
      </div> -->
      </nav>
      
  </div>
  <!-- Side widgets-->
  <div class="col-lg-4">
      <!-- Search widget-->
      <div class="card mb-4">
        <form action="{{ url('/store/search') }}" method="get">
          <div class="card-header">Search</div>
          <div class="card-body">
              <div class="input-group">
                  <input class="form-control" type="text" name="keyword" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                  <button class="btn btn-primary" id="button-search" type="submit">Search</button>
              </div>
          </div>
        </form>
      </div>
      <!-- Categories widget-->
      <div class="card mb-4">
          <div class="card-header">Categories</div>
          <div class="card-body">
              <div class="row">
                  <div class="col-sm-6">
                    @foreach($categories as $category)
                      <ul class="list-unstyled mb-0">
                          <li><a href="/store/category/{{$category->id}}">{{ $category->name }}</a></li>
                      </ul>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
      <!-- Side widget-->
      <div class="card mb-4">
          <div class="card-header">Side Widget</div>
          <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
      </div>
  </div>
</div>
@endsection