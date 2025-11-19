@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
            <h4>Carousel Section List</h4>
            <a href="{{route('admin.carousel.create')}}" class="p-2 bg-light rounded">Add Carousel Section</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>Header</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($carousels as $index => $carousel)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    <div>
                                        <img src="{{ $carousel->thumbnail }}" alt="thumbnail" class="round-thumbnail rounded-circle" style="width: 80px; height:80px; object-fit:cover">
                                    </div>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $carousel->header }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.carousel.edit', $carousel?->id)}}" class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>
                                        <a href="{{ route('admin.carousel.destroy', $carousel?->id)}}" class="btn btn-danger deleteConfirm">
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
