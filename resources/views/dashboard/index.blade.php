@extends('templates.dashboard')

@section('container')
    <h3>Selamat Datang {{ auth()->user()->name }}</h3>
    <article>
      Anda berada di Halaman dashboard admin, halaman ini digunakan untuk mengelola konten berita pada website Kemenag Tubaba.
      Anda Bisa membuat berita, menghapus, mengupadate berita serta kategori atau bisa membuat berita berdasarkan kategori yang anda inginkan.
    </article>
@endsection