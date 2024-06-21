@extends("layouts.main")

@section("content")
<div id="services-section">
    <div class="heading" >
        All Services
    </div>
    <div id="services">
        @foreach($services as $service)
            <div >
                <div id="icon">
                    <img src="{{ asset($service->service_icon) }}" alt="{{ $service->service_name }}">
                </div>
                <span>{{ $service->service_name }}</span>
                <div>{{ $service->service_description }}</div>
            </div>            
        @endforeach
    </div>
</div>
@endsection