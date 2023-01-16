@extends('layouts.app')

@section('title', 'Artikel ' . $post->judul)

@section('content')
<div class="row g-5">
    <div class="col-md-8">

      <article class="blog-post">
        <h2 class="blog-post-title">{{$post->judul}}</h2>
        <p class="blog-post-meta">{{\Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d F Y')}} by <span class="text-primary">{{$post->author->name}}</span></p>

        <p>{{$post->isi}}</p>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Kategori</h4>
          <ol class="list-unstyled mb-0">
            @forelse ($kategori as $item)
                <li><a href="#">{{$item->nama_kategori}}</a></li>
            @empty
                <li>Maaf Kategori Belum Tersedia Saat ini.</li>
            @endforelse
          </ol>
        </div>

      </div>
    </div>
  </div>
@endsection