@extends('layouts.app')

@section('title', 'Buat Artikel')

@section('content')
    <div class="row">
        <div class="col-4 mb-3">
            <a href="{{route('artikel.index')}}" class="btn btn-md btn-primary">
                Kembali
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Form Input Artikel</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('artikel.store')}}" method="POST">
                        @csrf
        
                        <div class="mb-3">
                            <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" name="judul" id="judul" class="form-control @error('judul')
                                is-invalid
                            @enderror">
                            @error('judul')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <label for="id_kategori" class="form-label">Kategori Artikel</label>
                            <select name="id_kategori" id="id_kategori" class="form-control @error('id_kategori')
                                is-invalid
                            @enderror">
                                @forelse ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                @empty
                                    <option value="0">Belum Ada Kategori</option>
                                @endforelse
                            </select>
                            @error('id_kategori')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi Artikel </label>
                            <textarea name="isi" id="isi" class="form-control @error('isi')
                                is-invalid
                            @enderror"></textarea>
                            @error('isi')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection