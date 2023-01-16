@extends('layouts.app')

@section('title', 'Landing Page CMS Blog')

@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4">
    
    @forelse ($artikel as $item)
    <div class="col-4">
      <div class="card">
        <img src="https://picsum.photos/100/100" class="card-img-top" alt="Gambar Dummy">
        <div class="card-body">
          <h5 class="card-title">{{$item->judul}}</h5>
          <p class="card-text">{{Str::limit($item->isi, '70', '...')}}</p>
          <a href="{{route('detail', $item->id)}}" class="btn btn-primary">Lihat Selengkapnya...</a>
        </div>
      </div>
    </div>
    @empty
        <div class="col">
            <h3 class="text-center">Artikel Masih Kosong !!!</h3>
        </div>
    @endforelse
    
  </div>
@endsection