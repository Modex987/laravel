@extends('layouts.app')

@section('content')
    <h1>Register An Account</h1>
    <form action="{{route('register')}}" method="post" class="px-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Full Name" value="{{old('name')}}">
            @error('name')
                <small>
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$message}}
                      </div>
                </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{old('username')}}">
            @error('username')
                <small>
                    <div class="alert alert-danger mt-1" role="alert">
                        {{$message}}
                    </div>
                </small>
            @enderror
        </div>
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
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="repeat your password">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
    </form>
@endsection