<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|max:10'
        ]);

        # now we can mass assign because we have validated data.
        Company::create($data);

        return back()->with('msg', 'company created successfully');
    }
}
