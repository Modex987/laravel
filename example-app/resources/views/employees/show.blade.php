@extends('layouts.template')


@section('title', 'Details For ' . $employee->name)


@section('content')

    <div class="row">
        <h1>Details For {{$employee->name}}</h1>
    </div>
    <div class="row align-items-center">
        <a href="/employee/{{$employee->id}}/edit" class="col-1">Edit</a>
        <form action="/employee/{{$employee->id}}" method="POST" class="col-1">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-link">
        </form>
    </div>
    <hr>
    <div class="row">
        <h4 class="mb-3">{{$employee->name}}</h4>
        <h4 class="mb-3">{{$employee->email}}</h4>
        <h4 class="mb-3">{{$employee->company->name}}</h4>
        <h4 class="mb-3">{{$employee->active}}</h4>
    </div>

@endsection