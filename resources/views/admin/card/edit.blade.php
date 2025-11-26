@extends('admin.layouts.app')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.card.index') }}">{{ __('Card Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Card Section') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.card.update', $card->id) }}" method="post" enctype="multipart/form-data">
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
                    <label for="category" class="form-label fw-bold">
                        Category <span class="text-danger">*</span>
                    </label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="offer" class="form-label fw-bold">
                        Offer <span class="text-danger">*</span>
                    </label>
                    <input id="offer" name="offer" type="text" class="form-control" required
                        value="{{ old('offer', $card->offer ?? '') }}">
                    @error('offer')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="btn_name" class="form-label fw-bold">Button Name <span class="text-danger">*</span></label>
                    <input id="btn_name" name="btn_name" type="text" class="form-control" required
                        value="{{ old('btn_name', $card->btn_name ?? '') }}">
                    @error('btn_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="btn_url" class="form-label fw-bold">Button URL <span class="text-danger">*</span></label>
                    <input id="btn_url" name="btn_url" type="url" class="form-control" required
                        value="{{ old('btn_url', $card->btn_url ?? '') }}">
                    @error('btn_url')
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
                                <img src="{{ $card->thumbnail ?? 'https://placehold.co/500x500/f1f5f9/png' }}"
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
                <a href="{{ route('admin.card.index') }}" class="btn btn-primary ">
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
