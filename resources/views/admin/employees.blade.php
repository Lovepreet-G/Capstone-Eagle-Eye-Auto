@extends('layouts.admin')

@section('content')
    <h1>List of Employees</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
                <th scope="col">Job Role</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Resignation Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->mobile }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->job_role }}</td>
                    <td>{{ $employee->joining_date }}</td>
                    <td>{{ $employee->resignation_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
