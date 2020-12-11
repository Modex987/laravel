<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'active' => 'required|integer|max:2|min:0',
            'company_id' => 'required|integer'
        ]);
    }

    public function create()
    {
        $companies = Company::all();
        $employee = new Employee;

        return view('employees.create', compact('companies', 'employee'));
    }

    public function store(Request $request)
    {
        Employee::create($this->validateRequest($request)); # mass assignement
        /*
        $employee = new Employee;

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->active = $request->active;

        $employee->save();
        */

        return back()->with('msg', 'Employee created successfully');
    }

    public function show(Employee $employee)
    {
        // $employee = Employee::where('id', $id)->firstOrFail(); # this is the old way with vanilla php
        

        return view('employees.show', compact('employee'));
        # Route Model Binding
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();

        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(Employee $employee, Request $request)
    {
        $employee->update($this->validateRequest($request));

        return redirect('/employee/' . $employee->id)->with('msg', 'Employee Updated successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employee')->with('msg', 'Employee Deleted Succefully');
    }
}
