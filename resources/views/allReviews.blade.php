
@extends('layouts.main')

@section('content')

<div id="reviews" class="d-flex flex-column align-items-center">
    <div class="heading mb-4">
        What Our Customers Say :)
    </div>
    
    <div class="w-75 mt-5">
        @foreach($reviews as $review)
            <div class="card mb-3" style="width: 18rem; margin-bottom: 10px;">
                <div class="card-body">
                    <h5 class="card-title"><span class="initial-circle" style="background-color: #{{ substr(md5($review->name), 0, 6) }};">{{ strtoupper(substr($review->name, 0, 1)) }}</span>{{ $review->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Rating: {{ $review->rating }}/10</h6>
                    <p class="card-text">{{ $review->review_description }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="heading mb-4">
        Tell Us How We are Doing
    </div>
    <div class="w-50">
        <form action="{{ route('reviewsstore') }}" method="POST">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif

</div>
@endsection
