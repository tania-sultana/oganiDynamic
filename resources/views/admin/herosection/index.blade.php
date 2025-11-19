@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
             <h4>Hero Section List</h4>
                <a href="{{route('admin.herosection.create')}}" class="p-2 bg-light rounded">Add Hero Section</a>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Header</th>
                            <th>First Title</th>
                            <th>Second Title</th>
                            <th class="text-center">Short_description</th>
                            <th>Button_Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <img src="{{ $herosection?->thumbnail }}" alt="thumbnail" width="100" class="round-thumbnail rounded-circle" style="width: 80px; height:80px; object-fit:cover">
                                </div>
                            </td>

                            <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                <span>{{ $herosection?->header }}</span>
                            </td>

                            <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                <span>{{ $herosection?->first_title }}</span>
                            </td>
                            <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                <span>{{ $herosection?->second_title }}</span>
                            </td>
                            <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                <span>{{ $herosection?->short_description }}</span>
                            </td>
                            <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                <span>{{ $herosection?->btn_name }}</span>
                            </td>

                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <a href="{{ route('admin.herosection.edit', $herosection?->id)}}" class="btn btn-secondary">
                                         <i class="material-symbols-rounded">edit</i>
                                    </a>
                                    <a href="{{ route('admin.herosection.destroy', $herosection?->id)}}" class="btn btn-danger deleteConfirm">
                                         <i class="material-symbols-rounded ">delete</i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
