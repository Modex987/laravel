<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        // sign the user
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login details');
        }

        // redirect
        return redirect()->route('dashboard');
    }
}
