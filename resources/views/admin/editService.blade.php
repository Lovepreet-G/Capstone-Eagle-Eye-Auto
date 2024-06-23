@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Edit Service</h2>
    <form method="POST" action="{{ route('admin.updateService', ['service' => $service->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="service_name" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="service_name" name="service_name" value="{{ old('service_name', $service->service_name) }}">
        </div>
        <div class="mb-3">
            <label for="service_description" class="form-label">Service Description</label>
            <textarea class="form-control" id="service_description" name="service_description" rows="3">{{ old('service_description', $service->service_description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="service_icon" class="form-label">Service Icon</label>
            <input type="file" class="form-control" id="service_icon" name="service_icon">
            @if($service->service_icon)
            <img src="{{ asset($service->service_icon) }}" alt="{{ $service->service_name }}" style="max-width: 80px; max-height: 80px;">
            @else
            <p>No icon uploaded.</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection
