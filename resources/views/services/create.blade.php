<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('services.store') }}">
                        @csrf
                        <!-- Title Field -->
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" name="title" placeholder="Enter service title"
                                   value="{{ old('title') }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Tagline Field -->
                        <div class="mb-3 mt-3">
                            <label for="tagline" class="form-label">Tagline</label>
                            <input type="text" class="form-control @error('tagline') is-invalid @enderror"
                                   id="tagline" name="tagline" placeholder="Enter tagline"
                                   value="{{ old('tagline') }}">
                            @error('tagline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3 mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      id="description" name="description" placeholder="Enter description">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Benefits Field -->
                        <div class="mb-3 mt-3">
                            <label for="benefits" class="form-label">Benefits (JSON format)</label>
                            <input type="text" class="form-control @error('benefits') is-invalid @enderror"
                                   id="benefits" name="benefits" placeholder='Enter benefits as JSON, e.g., ["Benefit 1", "Benefit 2"]'
                                   value="{{ old('benefits') }}">
                            @error('benefits')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Images Field -->
                        <div class="mb-3 mt-3">
                            <label for="images" class="form-label">Images (JSON format)</label>
                            <input type="text" class="form-control @error('images') is-invalid @enderror"
                                   id="images" name="images" placeholder='Enter image URLs as JSON, e.g., ["img1.jpg", "img2.jpg"]'
                                   value="{{ old('images') }}">
                            @error('images')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Testimonials Field -->
                        <div class="mb-3 mt-3">
                            <label for="testimonials" class="form-label">Testimonials (JSON format)</label>
                            <input type="text" class="form-control @error('testimonials') is-invalid @enderror"
                                   id="testimonials" name="testimonials" placeholder='Enter testimonials as JSON'
                                   value="{{ old('testimonials') }}">
                            @error('testimonials')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-purple w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
