@extends('admin.layouts.app')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.product.index') }}">{{ __('Product Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Product Section') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header py-3">
                <h5 class="card-title fs-16">
                    {{ __('General Information') }}
                </h5>
            </div>

            <div class=" p-3">

                <div class="mt-3">
                    <label for="name" class="form-label fw-bold">
                        Name <span class="text-danger">*</span>
                    </label>
                    <input id="name" name="name" type="text" class="form-control" required
                        value="{{ old('name', $product->name ?? '') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input id="price" name="price" type="number" step="0.01" class="form-control"
                        value="{{ old('price', $product->price ?? 0) }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="discount_price" class="form-label fw-bold">Discount Price</label>
                    <input id="discount_price" name="discount_price" type="number" step="0.01" class="form-control"
                        value="{{ old('discount_price', $product->discount_price ?? 0) }}">
                    @error('discount_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="short_description" class="form-label fw-bold">Short Description</label>
                    <input id="short_description" name="short_description" type="text" class="form-control"
                        value="{{ old('short_description', $product->short_description ?? '') }}">
                    @error('short_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea id="description" name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="additional_information" class="form-label fw-bold">Additional Information</label>
                    <input id="additional_information" name="additional_information" type="text" class="form-control"
                        value="{{ old('additional_information', $product->additional_information ?? '') }}">
                    @error('additional_information')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="weight" class="form-label fw-bold">Weight</label>
                    <input id="weight" name="weight" type="number" step="0.01" class="form-control"
                        value="{{ old('weight', $product->weight ?? 0) }}">
                    @error('weight')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <!--######## Thumbnail Information ##########-->

            <div class="row">
                <div class="col-12">
                    <div class="p-3">
                        <div class="card-header py-3">
                            <h4 class="card-title fs-16 m-0">
                                {{ __('Main Thumbnail') }}
                                <span class="text-primary">
                                    {{ __('(500 x 500)') }}
                                </span>
                            </h4>
                        </div>
                        <div class="card-body">

                            <label for="thumbnail" class="additionThumbnail">
                                <img src="{{ $product->thumbnail ?? 'https://placehold.co/500x500/f1f5f9/png' }}"
                                    id="preview" alt="Thumbnail Preview"
                                    style="width: 25%; height: auto; object-fit: cover;">
                            </label>


                            <input id="thumbnail" accept="image/*" type="file" name="thumbnail" class="d-none"
                                onchange="previewFile(event, 'preview')">


                            @error('thumbnail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3 justify-content-end align-items-center mb-3 me-3">
                <a href="{{ route('admin.product.index') }}" class="btn btn-primary ">
                    {{ __('Reset') }}
                </a>

                <button type="submit" class="btn btn-lg btn-primary rounded px-5">
                    {{ __('Update') }}
                </button>
            </div>
    </form>
@endsection
<script>
    function previewFile(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById(previewId);
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
