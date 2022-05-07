@extends('templates.main')

@section('container')

<div class="container">
  <div class="row">
    <h1 class="mb-5">Halaman Blog Post</h1>
    <article>
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
        <a href="/posts">Back to Posts</a>
    </article>
  </div>
</div>
    
@endsection
