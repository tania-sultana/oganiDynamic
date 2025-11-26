@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
            <h4>Card Section List</h4>
            <a href="{{ route('admin.card.create') }}" class="p-2 bg-light rounded">Add Card Section</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>Thumbnail</th>
                            <th>Category</th>
                            <th>Offer</th>
                            <th>Button_Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cards as $index => $card)
                            <tr>
                                <td>
                                    <div>
                                        <img src="{{ $card?->thumbnail }}" alt="thumbnail" width="100"
                                            class="round-thumbnail rounded-circle"
                                            style="width: 80px; height:80px; object-fit:cover">
                                    </div>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    <span>{{ $card?->category?->name }}</span>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    <span>{{ $card?->offer }}</span>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    <span>{{ $card?->btn_name }}</span>
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.card.edit', $card?->id) }}" class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>
                                        <a href="{{ route('admin.card.destroy', $card?->id) }}"
                                            class="btn btn-danger deleteConfirm">
                                            <i class="material-symbols-rounded ">delete</i>
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
