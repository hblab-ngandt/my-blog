@extends('welcome')

@section('content')
  <article>
    <!-- Post header-->
    @foreach ($posts as $post)
      <header class="mb-4">
          <!-- Post title-->
          <a class="text-decoration-none" href="/view/{{ $post->id }}">
            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
          </a>
          <!-- Post meta content-->
          <div class="text-muted fst-italic mb-2">Posted on {{ $post->create_at }} by {{ $post->author }}</div>
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
@endsection