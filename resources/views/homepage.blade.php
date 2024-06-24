@extends("layouts.main")

@section("content")
<div id="intro">
    <div id="intro-left">
        <span id="intro-brand">
            Eagle Eye Auto
        </span>
        <span>
            <small style="font">// A Garage For All Make And Models</small>
        </span>
        <big>
            Advanced Vehicle <br>Repair Service
        </big>
    </div>
    

</div>
<div id="second-section">
    <div id="maintenance">
        <span>Maintenance Services</span>
        <p>Providing top-quality maintenance and repair services to keep your vehicle running smoothly and efficiently</p>                 
    </div>
    <div id="engine-bg">
        {{-- <img src="{{ asset('images/engine.png') }}" alt="" srcset=""> --}}
    </div>
    <div id="certified">
        <span>Certified Repair Services</span>
        <p>Offering certified repair services to ensure your vehicle receives expert care and attention.</p>        
    </div>
    <div id="oil">
        {{-- <img src="{{ asset('images/oil.png') }}" alt="" srcset=""> --}}
    </div>
</div>
<div id="services-section">
    <div class="heading" >
        Get Over 100 car repairs
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
        
        {{-- <div>
            <div id="icon"><img src="{{ asset('images/car-oil.png') }}" alt="" srcset=""></div>
            <span>Change oil &filter</span>
            <div>Expert oil and filter change services to keep your engine running smoothly and efficiently.</div>
        </div>
        <div>
            <div id="icon"><img src="{{ asset('images/battery.png') }}" alt="" srcset=""></div>
            <span>Battery Change</span>
            <div>Reliable battery replacement services to ensure your vehicle starts every time.</div>
        </div>
        
        <div>
            <div id="icon"><img src="{{ asset('images/manual-transmission.png') }}" alt="" srcset=""></div>
            <span>Clutch & Transmission</span>
            <div>Professional clutch and transmission services to keep your vehicle shifting smoothly.</div>
        </div>
        
        <div>
            <div id="icon"><img src="{{ asset('images/car-repair.png') }}" alt="" srcset=""></div>
            <span>Car Diagnostics</span>
            <div>Comprehensive car diagnostics to accurately identify and fix any issues.</div>
        </div>
        
        <div>
            <div id="icon"><img src="{{ asset('images/tires.png') }}" alt="" srcset=""></div>
            <span>Tire Installation</span>
            <div>Quality tire installation services to ensure a safe and smooth ride.</div>
        </div>
        
        <div>
            <div id="icon"><img src="{{ asset('images/brake-pad.png') }}" alt="" srcset=""></div>
            <span>Brake Pad Replacement</span>
            <div>Trusted brake pad replacement services to keep your vehicle stopping safely.</div>
        </div> --}}

    </div>
    <a href="{{ route('services') }}" class="btn btn-primary mt-4">View All Services</a>
</div>

    <div id="reviews" class="d-flex flex-column align-items-center">
        <div class="heading">
            Tell Us How We are Doing
        </div>
        <div class="d-flex w-100 justify-content-around " id="review-area">
            <div id="post-review" class="d-flex flex-column">
                <h5>Post a Review</h5>
                <form id="review-form" action="{{ route('reviewsstore') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rate Us (1-10)</label>
                        <input type="number" name="rating" class="form-control" id="rating" min="1" max="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="review_description" class="form-label">Review Description</label>
                        <textarea name="review_description" class="form-control" id="review_description" rows="3" required></textarea>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success mt-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
            <div id="show-review" class="d-flex flex-column">
                <h5>Voices of Our Customer</h5>
                <!-- Example review cards -->
                @foreach($reviews as $review)
                    <div class="card mb-3" style="width: 18rem; margin-bottom: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><span class="initial-circle" style="background-color: #{{ substr(md5($review->name), 0, 6) }};"> {{ strtoupper(substr($review->name, 0, 1)) }}</span>&nbsp;{{ $review->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rating: {{ $review->rating }}/10</h6>
                            <p class="card-text">{{ $review->review_description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    
    


@endsection