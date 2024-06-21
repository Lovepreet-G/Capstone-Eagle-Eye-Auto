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
        <div>
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
        </div>

    </div>
    <div id="reviews" class="d-flex flex-column align-items-center">
        <div class="heading">
            Tell Us How We are Doing
        </div>
        <div class="d-flex w-100 justify-content-around">
            <div id="post-review" class="d-flex flex-column">
                <h5>Post a Review</h5>
                <form id="review-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rate Us (1-10)</label>
                        <input type="number" class="form-control" id="rating" name="rating" min="1" max="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Review Description</label>
                        <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
            <div id="show-review" class="d-flex flex-column">
                <h5>Voices of Our Customer</h5>
                <!-- Example review cards -->
                <div class="card" style="width: 18rem; margin-bottom: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: 8</h6>
                        <p class="card-text">Great service!</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin-bottom: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: 9</h6>
                        <p class="card-text">Very satisfied with the repair work.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin-bottom: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">Robert Brown</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: 7</h6>
                        <p class="card-text">Good, but there's room for improvement.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin-bottom: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">Emily White</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: 10</h6>
                        <p class="card-text">Excellent service, highly recommend!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</div>

@endsection