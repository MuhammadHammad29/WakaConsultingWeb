@extends('layouts.web')

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="service-hero bg-purple text-white p-5 rounded">
        <h1 class="service-title">{{ $service->title }}</h1>
        <p class="service-tagline">{{ $service->tagline }}</p>
    </div>

    <!-- Service Details Section -->
    <div class="service-details my-5">
        <h2>About the Service</h2>
        <p>{{ $service->description }}</p>
    </div>

    <!-- Benefits Section -->
    <div class="service-benefits bg-light p-4 rounded">
        <h3>Why Choose This Service</h3>
        <ul>
            @foreach($service->benefits as $benefit)
                <li>{{ $benefit }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Image Gallery (Optional) -->
    @if($service->images && count($service->images) > 0)
        <div class="service-gallery mt-5">
            <h3>Gallery</h3>
            <div class="row">
                @foreach($service->images as $image)
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Service Image" class="img-fluid rounded">
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Testimonials Section -->
    <div class="service-testimonials my-5 bg-gray p-4 rounded">
        <h3>Client Testimonials</h3>
        @foreach($service->testimonials as $testimonial)
            <blockquote class="testimonial mb-4">
                <p>{{ $testimonial->text }}</p>
                <footer>- {{ $testimonial->author }}</footer>
            </blockquote>
        @endforeach
    </div>

    <!-- Call-to-Action Button -->
    <div class="text-center my-4">
        <a href="{{ route('contact') }}" class="btn btn-purple btn-lg">Contact Us for More Details</a>
    </div>
</div>
@endsection
