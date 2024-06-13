@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Add Car Repair</h2>
        <form action="{{ route('admin.carRepairStore') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="vin" class="form-label">VIN</label>
                <input type="number" class="form-control" id="vin" name="vin" required>
            </div>
            <div class="mb-3">
                <label for="repairDate" class="form-label">Repair Date</label>
                <input type="date" class="form-control" id="repairDate" name="repair_date" required>
            </div>
            <div class="mb-3">
                <label for="repairType" class="form-label">Repair Type</label>
                <input type="text" class="form-control" id="repairType" name="repair_type" required>
            </div>
            <div class="mb-3">
                <label for="employeeId" class="form-label">Employee</label>
                <select class="form-control" id="employeeId" name="employee_id">
                    <option value="">Select Employee</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->employee_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="partsUsed" class="form-label">Parts Used</label>
                <input type="text" class="form-control" id="partsUsed" name="parts_used" required>
            </div>
            <div class="mb-3">
                <label for="totalCost" class="form-label">Total Cost</label>
                <input type="number" step="0.01" class="form-control" id="totalCost" name="total_cost" required>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control" id="note" name="note" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
