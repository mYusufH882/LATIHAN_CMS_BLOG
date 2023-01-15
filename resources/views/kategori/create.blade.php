@extends('layouts.app')

@section('title', 'Buat Kategori')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Form Input Kategori</h2>
            </div>
            <div class="card-body">
                <form action="{{route('kategori.store')}}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control @error('nama_kategori')
                        is-invalid
                    @enderror">
                    @error('nama_kategori')
                        <span>
                            <strong class="text-danger">{{$message}}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        <a href="{{route('kategori.index')}}" class="btn btn-md btn-primary">
                            Kembali
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection