<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php($route = isset($data) ? route('services.update') : route('services.store'))
                    <form method="post" action="{{$route}}">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Name:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" placeholder="Enter Service name" name="title"
                                   value="@isset($data->title) {{$data->title}} @endisset">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tagline" class="form-label">Tagline:</label>
                            <input type="text" class="form-control @error('tagline') is-invalid @enderror"
                                   id="tagline" placeholder="Enter tagline" name="tagline"
                                   value="@isset($data->tagline) {{$data->tagline}} @endisset">
                            @error('tagline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="description" class="form-label">Description:</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                   id="description" placeholder="Enter Description" name="description"
                                   value="@isset($data->description) {{$data->description}} @endisset">
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="hidden" name="id" value="@isset($data->id) {{$data->id}} @endisset">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>