
@extends('layouts.main')
@section('gian-modol')
<h1>halaman posts</h1>
@if ($posts->count())
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <h5>by: <a href="/authors/{{ $posts[0]->user->id }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></h5>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->id }}" class="btn btn-primary">read more..</a>
      <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
    </div>
</div>
  @else
    <p class="text-center fs-4">no post found!</p>
@endif

  
  @foreach ($posts as $post)
  <article class="mb-5 mt-4">
    <h2>
        <a href="/posts/{{ $post->id }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <h5>by: <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->id }}" class="btn btn-primary">read more..</a>
    </article>
    @endforeach
@endsection

{{-- <!DOCTYPE html> --}}
{{-- <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>blog</title>
    </head>
    <body>
        {{-- <div class="mb-5">
            <h1>Halaman Blog</h1>
        </div> --}}
        {{-- @foreach ($post as $item) --}}
        {{-- <article class="mb-5 border-bottom pb-4">
            <h2><a href="/posts/" class="text-decoration-none">{{ $item->title }}</a></h2>
            <p>by:{{ $item->name }} </p>
            <h5>{{ $item->excerpt }}</h5>
            <p>{{ $item->slug }}</p>  
            <p><a href="/posts/" class="text-decoration-none">read more....</a></p>
        </article>  --}}

        {{-- @endforeach --}}

    {{-- </body>
    </html> --}} 