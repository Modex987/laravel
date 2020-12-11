@extends('layouts.template')


@section('title', 'Edit Employee ' . $employee->name)


@section('content')
    
    <h1 class="mb-3">Edit Employee {{$employee->name}}</h1>
    <hr>
    <form class="px-5" method="POST" action="/employee/{{$employee->id}}">
        @method('PATCH')
        @include('inc.form')
    </form>

@endsection