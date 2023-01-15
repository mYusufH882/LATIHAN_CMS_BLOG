@extends('layouts.app')

@section('title', 'Kategori')

@section('content')
<div class="row">
    <div class="col-4 mb-3">
        <a href="{{route('kategori.create')}}" class="btn btn-md btn-primary">
            Buat Kategori
        </a>
    </div>
</div>
@if (Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        <span>{{Session::get('success')}}</span>
    </div>
@endif
<div class="row justify-content-center">
    <div class="col">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategori as $item)
                    <tr>
                        <td>{{$item->nama_kategori}}</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex">
                                    <a href="{{route('kategori.edit', $item->id)}}" class="btn btn-sm btn-warning text-white mx-2">
                                        Edit
                                    </a>
                                    <form action="{{route('kategori.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
    
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menhapus kategori ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">Kategori Belum Tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection