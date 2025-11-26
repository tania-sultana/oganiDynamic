@extends('admin.layouts.app')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.card.index') }}">{{ __('card Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New card') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.card.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title">{{ __('General Information') }}</h4>
                </div>

                <div class="card-body">
                    <div class="mt-3">
                        <label for="category" class="form-label fw-bold">
                            Category <span class="text-danger">*</span>
                        </label>
                        <select id="category" class="w-100 p-2" name="category" required>
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="offer" class="form-label fw-bold">
                            Offer <span class="text-danger">*</span>
                        </label>
                        <input id="offer" type="text" class="w-100 p-2" name="offer" placeholder="Enter offer"
                            required>
                    </div>

                    <div class="mt-3">
                        <label for="btn_name" class="form-label fw-bold">Button Name <span
                                class="text-danger">*</span></label>
                        <input id="btn_name" type="text" class="w-100 p-2" name="btn_name"
                            placeholder="Enter button name" required>
                    </div>

                    <div class="mt-3">
                        <label for="btn_url" class="form-label fw-bold">Button URL <span
                                class="text-danger">*</span></label>
                        <input id="btn_url" type="url" class="w-100 p-2" name="btn_url" placeholder="Enter button url"
                            required>
                    </div>
                </div>

                <!--######## Thumbnail Information ##########-->

                <div class=" ">
                    <div class="card-header py-3">
                        <h4 class="card-title fs-16 m-0">
                            {{ __('Card Thumbnail') }}
                            <span class="text-primary">
                                {{ __('(500 x 500)') }}
                            </span>
                        </h4>
                    </div>

                    <div class="card-body">
                        <label for="thumbnail" class="additionThumbnail">
                            <img src="{{ asset('assets/images/default.jpg') }}" id="preview" alt="Thumbnail"
                                width="25%">
                        </label>

                        <input id="thumbnail" accept="image/*" type="file" name="thumbnail" class="d-none w-25 h-25"
                            onchange="previewFile(event, 'preview')">
                        @error('thumbnail')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="d-flex gap-3 justify-content-end align-items-center mb-3">
                <a href="{{ route('admin.card.index') }}" class="btn btn-lg btn-light rounded px-5">Reset</a>
                <button type="submit" class="btn btn-lg btn-primary rounded px-5">Submit</button>
            </div>
    </form>
@endsection
<script>
    function previewFile(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
