@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col text-center">
            <h2>Selamat Datang, {{auth()->user()->name}}</h2>
        </div>
    </div>
@endsection