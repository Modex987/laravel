@extends('layouts.app')


@section('content')
    <div class="row align-items-center bg-dark border rounded px-5 py-3">
        <h1 class="text-white d-inline">{{$user->name}}</h1>
        <h3 class="pl-5 text-white d-inline">Posted: {{$posts->count()}} {{Str::plural('post', $posts->count())}}</h3>
        <h3 class="pl-5 text-white d-inline">Received: {{$user->receivedLikes->count()}} {{Str::plural('like', $user->receivedLikes->count())}}</h3>
    </div>
    <hr>
    <div class="row bg-light border rounded p-2">
        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post :post="$post" />
            @endforeach
            {{$posts->links()}}
        @else
            <p>{{$user->name}} doesn't have any post</p>
        @endif
    </div>
@endsection