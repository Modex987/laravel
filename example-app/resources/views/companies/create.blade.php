@extends('layouts.template')


@section('title', 'Company Dashboard')


@section('content')
    <h1 class="mb-3">Add New Company</h1>
    <hr>
    <form class="px-5" method="post" action="/company">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Company Name</label>
            <input type="name" name="name" class="mb-1 form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" value="{{old('name')}}">
            @error('name')
                <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Company phone number</label>
            <input type="text" name="phone" class="mb-1 form-control @error('phone') is-invalid @enderror" id="phone" value="{{old('phone')}}" maxlength="10">
            @error('phone')
                <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
            @enderror
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
@endsection