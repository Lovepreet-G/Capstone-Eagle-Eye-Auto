@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Add New Employee</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.employee.store') }}" method="POST">
            {{-- @csrf --}}
            <div class="mb-3">
                <label for="employee_name" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="employee_name" name="employee_name" required>
            </div>
            <div class="mb-3">
                <label for="email_address" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email_address" name="email_address" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="mobile_number" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="job_role" class="form-label">Job Role</label>
                <input type="text" class="form-control" id="job_role" name="job_role" required>
            </div>
            <div class="mb-3">
                <label for="joining_date" class="form-label">Joining Date</label>
                <input type="date" class="form-control" id="joining_date" name="joining_date" required>
            </div>
            <div class="mb-3">
                <label for="resignation_date" class="form-label">Resignation Date (Optional)</label>
                <input type="date" class="form-control" id="resignation_date" name="resignation_date">
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>
@endsection
