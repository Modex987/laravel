@extends('layouts.template')


@section('title', 'Employees Dashboard')


@section('content')
    <caption><h1>Employees List</h1></caption>
    <hr>
    <table class="table table-dark table-striped m-1 mb-5 border rounded">
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Employee E-mail</th>
                <th>Employee Company</th>
                <th>Employee Activity</th>
            </tr>
        </thead>
        <tbody>
            @if ($employees->count())
                @foreach ($employees as $employee)
                    <tr>
                        <th><a href="/employee/{{$employee->id}}">{{$employee->name}}</a></th>
                        <th>{{$employee->email}}</th>
                        <th>{{$employee->company->name}}</th>
                        <th>{{$employee->active}}</th>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td></td>
                    <td>No Employees Here</td>
                    <td></td>
                    <td></td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection