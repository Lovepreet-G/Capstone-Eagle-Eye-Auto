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
    <div id="services-heading" >
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
    
</div>

@endsection