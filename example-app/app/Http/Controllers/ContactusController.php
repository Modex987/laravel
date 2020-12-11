<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactusMail;

class ContactusController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:510',
        ]);

        Mail::to('admin@mourad.com')->send(new ContactusMail($data));

        return back()->with('msg', 'Email Sent Succefully');
    }
}
