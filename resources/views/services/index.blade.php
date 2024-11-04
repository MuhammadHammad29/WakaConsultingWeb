@extends('layouts.web')

@section('content')
<div class="container my-5">
    <h2>Search Results</h2>
    @if($services->isNotEmpty())
        <div class="row">
            @foreach($services as $service)
                <!-- Display each service as needed -->
                <div class="col-md-4">
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-primary">View Details</a>
                </div>
            @endforeach
        </div>
    @else
        <p>No services found matching your search criteria.</p>
    @endif
</div>
@endsection
