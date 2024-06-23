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
                <th scope="col">Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->service_name }}</td>
                <td>{{ $service->service_description }}</td>
                <td><img src="{{ asset($service->service_icon) }}" alt="{{ $service->service_name }}" width="30"></td>
                <td>
                    <a href="{{ route('admin.editService', ['service' => $service->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button onclick="deleteService({{ $service->id }})" class="btn btn-danger">Delete</button>
                    <form id="delete-form-{{ $service->id }}" action="{{ route('admin.destroyService', $service->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script>
   function deleteService(serviceId) {
        if (confirm('Are you sure you want to delete this service?')) {
            document.getElementById('delete-form-' + serviceId).submit();
        }
    }
      
</script>
    
    
@endsection
