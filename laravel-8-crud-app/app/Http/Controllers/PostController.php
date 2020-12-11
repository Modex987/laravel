<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        // $posts = Post::get();
        // $posts = Post::latest()->with(['user', 'likes'])->paginate(5);
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(5);
        // dd($posts);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'      => 'required'
        ]);

        // Post::create([
        //     'user_id'   => auth()->id(),
        //     'body'      => $request->body
        // ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function destroy(Request $request, Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();

        # the other way of doing things.
        // if($post->ownedBy(auth()->user())){
            // return back();
            // $post->delete();
        // }else{
            // dd('no');
        // }
    }
}