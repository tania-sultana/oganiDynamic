@extends('admin.layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.herosection.index') }}">{{ __('Hero Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Hero Section') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.herosection.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title">{{ __('General Information') }}</h4>
                </div>

                <div class="card-body">

                    <div class="mt-3">
                        <label for="header" class="form-label fw-bold">Header <span class="text-danger">*</span></label>
                        <input id="header" type="text" class="w-100 p-2" name="header" placeholder="Enter header"
                            required>
                    </div>

                    <div class="mt-3">
                        <label for="first_title" class="form-label fw-bold">First Title <span
                                class="text-danger">*</span></label>
                        <input id="first_title" type="text" class="w-100 p-2" name="first_title"
                            placeholder="Enter first title" required>
                    </div>

                    <div class="mt-3">
                        <label for="second_title" class="form-label fw-bold">Second Title <span
                                class="text-danger">*</span></label>
                        <input id="second_title" type="text" class="w-100 p-2" name="second_title"
                            placeholder="Enter second title" required>
                    </div>

                    <div class="mt-3">
                        <label for="short_description" class="form-label fw-bold">Short Description <span
                                class="text-danger">*</span></label>
                        <input id="short_description" type="text" class="w-100 p-2" name="short_description"
                            placeholder="Enter short description" required>
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
                            {{ __('Main Thumbnail') }}
                            <span class="text-primary">
                                {{ __('(500 x 500)') }}
                            </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <label for="thumbnail" class="additionThumbnail">
                            <img src="{{ $herosection->thumbnail ?? 'https://placehold.co/500x500/f1f5f9/png' }}"
                                id="preview" alt="Thumbnail" width="25%">
                        </label>

                        <input id="thumbnail" accept="image/*" type="file" name="thumbnail" class="d-none"
                            onchange="previewFile(event, 'preview')">

                        @error('thumbnail')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="d-flex gap-3 justify-content-end align-items-center my-3">
                <a href="{{ route('admin.herosection.index') }}" class="btn btn-lg btn-light rounded px-5">Reset</a>
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
