@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Add New Service</h2>
    <form action="{{ route('admin.servicesstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="service_name" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="service_name" name="service_name" required>
        </div>
        <div class="mb-3">
            <label for="service_description" class="form-label">Service Description</label>
            <textarea class="form-control" id="service_description" name="service_description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="service_icon" class="form-label">Service Icon</label>
            <input type="text" class="form-control" id="service_icon" name="service_icon" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
</div>
@endsection
