<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
use App\Mail\PostLiked;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // dd(Post::find(1)->created_at);
        // dd(auth()->user()->posts);

        return view('dashboard');
    }
}
