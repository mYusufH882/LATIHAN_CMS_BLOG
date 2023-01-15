@extends('layouts.app')

@section('title', 'Register CMS App')
    
@section('content')
<div class="row my-5"></div>
<div class="row my-5 justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Register</h1>
            </div>
            <div class="card-body">
                <form action="{{route('registered')}}" method="POST" class="row g-3">
                    @csrf

                    <div class="col-md-12">
                        <label for="username" class="form-label"><b>Username</b></label>
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username')
                            is-invalid                            
                        @enderror">
                        @error('username')
                            <span><strong class="text-danger">{{$message}}</strong></span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="text" name="email" id="email" placeholder="Email" class="form-control @error('email')
                            is-invalid
                        @enderror">
                        @error('email')
                            <span><strong class="text-danger">{{$message}}</strong></span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control @error('password')
                            is-invalid
                        @enderror">
                        @error('password')
                            <span><strong class="text-danger">{{$message}}</strong></span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label"><b>Konfirmasi Password</b></label>
                        <input type="password" name="password_confirmation " id="password" placeholder="Konfirmasi Password" class="form-control @error('password')
                            is-invalid
                        @enderror">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-md btn-success">Register</button>
                    </div>

                    <div class="col-12 text-center">
                        <a href="{{route('login')}}">Sudah Punya Akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection