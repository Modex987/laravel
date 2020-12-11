@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    @if (session()->has('status'))
        <small>
            <div class="alert alert-danger my-1" role="alert">
                {{session('status')}}
            </div>
        </small>
    @endif
    <form action="{{route('login')}}" method="post" class="px-5">
        @csrf
        {{-- <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{old('username')}}">
            @error('username')
                <small>
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$message}}
                    </div>
                </small>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label for="email" class="form-label">E-mail address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="user@example.com" value="{{old('email')}}">
            @error('email')
                <small>
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$message}}
                    </div>
                </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
            @error('password')
                <small>
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$message}}
                    </div>
                </small>
           @enderror
        </div>
        <div class="mb-3">
            <input type="checkbox" name="remember" class="mr-1" id="remember">
            <label for="remember" class="form-label">Remeber Me</label>
        </div>
        <input type="submit" name="submit" value="Login" class="btn btn-outline-primary">
    </form>
@endsection