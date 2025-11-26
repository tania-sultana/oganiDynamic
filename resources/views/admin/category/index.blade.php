@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
            <h4>Category List</h4>
            <a href="{{ route('admin.category.create') }}" class="p-2 bg-light rounded">Add Category Section</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $category->name }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.category.edit', $category?->id) }}"
                                            class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>

                                        <a href="{{ route('admin.category.destroy', $category?->id) }}"
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
