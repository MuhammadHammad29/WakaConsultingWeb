<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php($route = isset($project) ? route('projects.update', $project->id) : route('projects.store'))
                    <form method="post" action="{{$route}}"enctype="multipart/form-data">
                        @csrf
                        @if(isset($project) && $project->picture)
                        @method('PUT') <!-- This is for PUT requests -->
                            <div class="mb-3">
                                <img src="{{ asset('storage/uploads/' . $project->picture) }}"
                                     alt="Uploaded Photo"
                                     class="img-thumbnail"
                                     style="max-width: 150px; max-height: 150px;">
                            </div>
                        @endif
                        <div class="mb-3 mt-3">
                            <label for="picture" class="form-label">Upload Picture:</label>
                            <input type="file" name="picture" class="form-control"/>
                            {{--<input type="file" name="images[]" class="form-control" multiple/>--}}
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" placeholder="Enter Title Of Project" name="title"
                                   value="@isset($project->title) {{$project->title}} @endisset">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="figma_link">Figma Link</label>
                            <input type="url" name="figma_link" id="figma_link" class="form-control"
                            placeholder="Enter Figma project link" 
                            value="{{ old('figma_link', $project->figma_link ?? '') }}">
                        </div>                        
                        <div class="mb-3">
                            <label for="services" class="form-label">Link Services</label>
                            <select name="services[]" id="services" class="form-control" multiple required>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ isset($project) && $project->services->contains($service->id) ? 'selected' : '' }}
                                        >{{ $service->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="@isset($project->id) {{$project->id}} @endisset">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>