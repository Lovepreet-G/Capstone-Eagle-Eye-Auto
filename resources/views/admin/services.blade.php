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
                    <a href="{{ route('admin.editServices', ['service' => $service->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger" onclick="deleteService({{ $service->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Custom delete confirmation modal -->
<div class="modal fade" id="deleteServiceModal" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteServiceModalLabel">Confirm Delete Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this service?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteServiceForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function deleteService(serviceId) {
        $('#deleteServiceModal').modal('show');
        var url = "{{ route('admin.servicedestroy', ':id') }}";
        url = url.replace(':id', serviceId);
        document.getElementById('deleteServiceForm').action = url;
    }
</script>
@endsection
