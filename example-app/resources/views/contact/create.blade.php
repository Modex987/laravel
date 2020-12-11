@extends('layouts.template')


@section('title', 'Contact Us')


@section('content')
    
    <h1 class="mb-3">Contact Us</h1>
    <hr>
    <form class="px-5 pb-5" method="post" action="/contact">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <small><div class="mt-1 alert alert-danger" role="alert">{{ $message }}</div></small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail address</label>
            <input type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="email">
            @error('email')
                <small><div class="mt-1 alert alert-danger" role="alert">{{ $message }}</div></small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="@error('message') is-invalid @enderror form-control" ></textarea>
            @error('message')
                <small><div class="mt-1 alert alert-danger" role="alert">{{ $message }}</div></small>
            @enderror
        </div>
        <input type="submit" class="btn btn-outline-primary" value="Send">
    </form>

@endsection