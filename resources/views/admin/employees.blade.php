@extends('layouts.admin')

@section('content')
    <h1>List of Employees</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Job Role</th>
                <th>Joining Date</th>
                <th>Resignation Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->employee_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->mobile }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->job_role }}</td>
                    <td>{{ $employee->joining_date }}</td>
                    <td>{{ $employee->resignation_date ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
