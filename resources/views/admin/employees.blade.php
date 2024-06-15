@extends('layouts.admin')

@section('content')
    <h1>List of Employees</h1>
    <form method="GET" action="{{ route('admin.employees-search') }}" class="mb-3">
        <div class="input-group">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
            <div class="input-group-prepend">
                <label class="input-group-text" for="field">Search by:</label>
                <select class="form-select" name="field">
                    <option value="employee_name" {{ request()->get('field') == 'employee_name' ? 'selected' : '' }}>Name</option>
                    <option value="mobile" {{ request()->get('field') == 'mobile' ? 'selected' : '' }}>Mobile</option>
                    <option value="email" {{ request()->get('field') == 'email' ? 'selected' : '' }}>Email</option>
                    <option value="address" {{ request()->get('field') == 'address' ? 'selected' : '' }}>Address</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
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
                <th scope="col">Action</th> 
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
                    <td>
                        <a href="{{ route('admin.editEmployee', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
