@extends('layouts.main')
@section('gian-modol')
    <h1>{{ $post->title }}</h1>
    <h3>author : {{ $post->user->name }}</h3>
    <p>{{ $post->body }}</p>
   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      kembali ke:
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="/about/">halaman about</a></li>
      <li><a class="dropdown-item" href="/posts/">halaman posts</a></li>
    </ul>
  </div>
</div>
  
@endsection