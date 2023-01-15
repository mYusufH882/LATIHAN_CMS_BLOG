@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="row">
        <div class="col-4 mb-3">
            <a href="{{route('artikel.create')}}" class="btn btn-md btn-primary">
                Buat Artikel
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
                        <th>No.</th>
                        <th>Judul Artikel</th>
                        <th>Author</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($artikel as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->author->name}}</td>
                            <td>{{$item->kategori->nama_kategori}}</td>
                            <td>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="{{route('artikel.edit', $item->id)}}" class="btn btn-sm btn-warning text-white mx-2">
                                            Edit
                                        </a>
                                        <form action="{{route('artikel.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
        
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menhapus artikel ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Artikel Belum Tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection