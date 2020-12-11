@extends('layouts.app')


@section('content')
    <div class="bg-light border rounded p-2">
        <div class="con-12">
            @auth                
                <form action="{{route('posts')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="body" class="pl-1 form-input">Body</label><br>
                        <textarea name="body" id="body" cols="60" rows="10" class="@error('body') is-invalid @enderror">
                            
                        </textarea>
                        @error('body')
                            <small>
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{$message}}
                                </div>
                            </small>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Save">
                </form>
            @endauth
            @guest
                <h1 class="p-4">Sign In to Post</h1>
            @endguest
            <hr class="my-3">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{$posts->links()}}
            @else
                <p>There are no posts at the moment</p>
            @endif
        </div>
    </div>
@endsection
