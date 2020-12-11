@extends('layouts.template')


@section('title', 'Add Employee')


@section('content')
    
    <h1 class="mb-3">Add New Employee</h1>
    <hr>
    <form class="px-5" method="post" action="/employee">
        @include('inc.form')
    </form>

@endsection