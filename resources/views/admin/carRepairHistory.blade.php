@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2>Car Repair History</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Registration Number</th>
                    <th scope="col">Repair Date</th>
                    <th scope="col">Repair Type</th>
                    <th scope="col">Parts Used</th>
                    <th scope="col">Total Cost</th>
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
                        <td>{{ $repair->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
