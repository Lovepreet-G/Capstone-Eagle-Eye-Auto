@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Employee</h2>
    <form method="POST" action="{{ route('admin.updateEmployee', $employee->id) }}">
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="employee_name" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name" value="{{ $employee->employee_name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $employee->mobile }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}" required>
        </div>

        <div class="mb-3">
            <label for="job_role" class="form-label">Job Role</label>
            <select class="form-control" id="job_role" name="job_role" required>
                <option value="">Select Job Role</option>
                <option value="Manager" {{ $employee->job_role == 'Manager' ? 'selected' : '' }}>Manager</option>
                <option value="Sales Executive" {{ $employee->job_role == 'Sales Executive' ? 'selected' : '' }}>Sales Executive</option>
                <option value="Mechanic" {{ $employee->job_role == 'Mechanic' ? 'selected' : '' }}>Mechanic</option>
                <option value="Lead Mechanic" {{ $employee->job_role == 'Lead Mechanic' ? 'selected' : '' }}>Lead Mechanic</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="joining_date" class="form-label">Joining Date</label>
            <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{ $employee->joining_date }}" >
        </div>

        <div class="mb-3">
            <label for="resignation_date" class="form-label">Resignation Date</label>
            <input type="date" class="form-control" id="resignation_date" name="resignation_date" value="{{ $employee->resignation_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Employee</button>
    </form>
</div>
@endsection
