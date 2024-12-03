<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }} alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="d-flex flex-row-reverse p-2">
                <a href="{{route('projects.create')}}">
                    <button class="btn btn-success">Create</button>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Services</th>
                            <th>Link</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($projects as $row)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->title}}</td>
                                <td><img src="{{ asset('storage/' . $row->picture) }}" width="100" alt="Project Image"></td>
                                <td>  @foreach($row->services as $service)
                                    <span class="badge bg-secondary">{{ $service->title }}</span>
                                @endforeach
                                </td>
                                <td>{{$row->figma_link}}</td>
                                <td>
                                    <span>
                                        <a href="{{route('projects.edit', $row->id)}}">Edit</a>
                                    </span> |
                                    <span>
                                         <a href="{{route('projects.destroy', $row->id)}}">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>