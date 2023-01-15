@extends('layouts.app')

@section('title', 'Login CMS App')
    
@section('content')
<div class="row my-5"></div>
<div class="row my-5"></div>
<div class="row my-5 justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('login.auth')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control @error('email')
                            is-invalid
                        @enderror">
                        @error('email')
                            <span>
                                <strong class="text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control  @error('password')
                            is-invalid
                        @enderror">
                        @error('password')
                        <span>
                            <strong class="text-danger">{{$message}}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-md btn-primary">Login</button>
                    </div>

                    <div class="mb-3 text-center">
                        <a href="{{route('register')}}">Belum Punya Akun</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection