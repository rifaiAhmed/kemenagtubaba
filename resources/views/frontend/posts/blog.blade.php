@extends('templates.main')

@section('container')

<div class="container">
  <div class="row">
    <h1 class="mb-5">Halaman Blog Post</h1>
    <article>
      @foreach ($posts as $post)
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p class="text-truncate">{{ $post->excerpt }}</p>
      @endforeach
    </article>
  </div>
</div>
    
@endsection
