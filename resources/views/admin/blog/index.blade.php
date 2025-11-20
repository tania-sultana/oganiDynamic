@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
            <h4>Blog List</h4>
            <a href="{{ route('admin.blog.create') }}" class="p-2 bg-light rounded">Add Blog Section</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>First Title</th>
                            <th>Short Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($blogs as $index => $blog)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    {{-- {{$blog->first_thumbnail_id}} --}}
                                    <div>
                                        <img src="{{ $blog->firstThumbnail}}"
                                            alt="Blog First Thumbnail" class="round-thumbnail rounded-circle"
                                            style="width: 80px; height: 80px; object-fit: cover;" />
                                    </div>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $blog->first_title }}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $blog->short_description }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.blog.edit', $blog?->id) }}" class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>

                                        <a href="{{ route('admin.blog.show', $blog->id) }}" class="btn btn-outline-info">
                                            <i class="material-symbols-rounded ">visibility</i>
                                        </a>

                                        <a href="{{ route('admin.blog.destroy', $blog?->id) }}"
                                            class="btn btn-danger deleteConfirm">
                                            <i class="material-symbols-rounded">delete</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
