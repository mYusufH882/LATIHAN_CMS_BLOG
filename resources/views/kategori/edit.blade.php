@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Form Edit Kategori</h2>
            </div>
            <div class="card-body">
                <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                    @csrf
                    @method('PUT')
    
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" value="{{old('nama_kategori', $kategori->nama_kategori)}}" class="form-control @error('nama_kategori')
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