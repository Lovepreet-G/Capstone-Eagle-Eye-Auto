@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Car Repair History</h2>
        <form method="GET" action="{{ route('admin.carRepairHistorySearch') }}" class="mb-3">
            <div class="input-group">
                
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="field">Search by:</label>
                    <select class="form-select" name="field" id="field">
                        <option value="vin" {{ request()->get('field') == 'vin' ? 'selected' : '' }}>VIN</option>
                        <option value="repair_type" {{ request()->get('field') == 'repair_type' ? 'selected' : '' }}>Repair Type</option>
                        <option value="parts_used" {{ request()->get('field') == 'parts_used' ? 'selected' : '' }}>Parts Used</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Registration Number</th>
                    <th scope="col">Repair Date</th>
                    <th scope="col">Repair Type</th>
                    <th scope="col">Parts Used</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carRepairs as $repair)
                    <tr>
                        <th scope="row">{{ $repair->id }}</th>
                        <td>{{ $repair->vin }}</td>
                        <td>{{ $repair->repair_date }}</td>
                        <td>{{ $repair->repair_type }}</td>
                        <td>{{ $repair->parts_used }}</td>
                        <td>{{ $repair->total_cost }}</td>
                        <td>{{  $repair->employee ? $repair->employee->employee_name : 'N/A' }}</td>
                        <td>{{ $repair->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
