@extends('layouts.app')


@section('content')
    <div class="row bg-light border rounded p-2">
        <x-post :post="$post"/>
    </div>
@endsection