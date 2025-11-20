@extends('admin.layouts.app')
@section('content')
    <div class="">
        <div class="card-header d-flex align-content-center justify-content-between my-4">
            <h4>Product Section List</h4>

            <div class="input-group" style="max-width: 400px">
                <input type="text" name="search" class="form-control" placeholder="{{ __('Search by product name') }}"
                    value="{{ request('search') }}"
                    style="height: 37px; padding: 5px 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px 0 0 5px;">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>

            <a href="{{ route('admin.product.create') }}" class="p-2 bg-light rounded">Add Product Section</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>Name</th>
                            <th>Price</th>

                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    <div>
                                        <img src="{{ $product->thumbnail }}" alt="thumbnail"
                                            class="round-thumbnail rounded-circle"
                                            style="width: 80px; height:80px; object-fit:cover">
                                    </div>
                                </td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $product->name }}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $product->price }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.product.edit', $product?->id) }}"
                                            class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>

                                        <a href="{{ route('admin.product.show', $product->id) }}"
                                            class="btn btn-outline-info">
                                            <i class="material-symbols-rounded ">visibility</i>
                                        </a>

                                        <a href="{{ route('admin.product.destroy', $product?->id) }}"
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

    <div>
        {{ $products->links() }}
    </div>
@endsection
