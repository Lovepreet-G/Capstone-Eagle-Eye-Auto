@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Manage Services</h2>
    <a href="{{ route('admin.addService') }}" class="btn btn-primary mb-3">Add New Service</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Service Name</th>
                <th>Service Description</th>
                <th>Service Icon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->service_name }}</td>
                <td>{{ $service->service_description }}</td>
                <td><i class="{{ $service->service_icon }}"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
