{{-- <div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div> --}}

@props(['post' => $post])

<div class="col-12 mb-4 py-2 px-5 border rounded">
    <small><span class="badge bg-info text-dark">created at: {{$post->created_at->diffForHumans()}}</span></small>
    <a href="{{route('user.posts', $post->user)}}"><small><span class="badge bg-danger">{{$post->user->name}}</span></small></a>
    <p>{{$post->body}}</p>
    @can('delete', $post)
        <form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-link" value="Delete">
        </form>
    @endcan
    <div class="d-flex align-items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{route('posts.likes', $post)}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-link" value="Like">
                </form>
            @else
                <form action="{{route('posts.likes', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-link" value="Unlike">
                </form>
            @endif
        @endauth
        <small>{{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}</small>&nbsp;&nbsp;
        <small><a href="{{route('posts.show', $post)}}">show</a></small>
    </div>
</div>