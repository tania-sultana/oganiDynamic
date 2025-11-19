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
                    <div class="mt-3 ">
                        <input label="Header" type="text" class="w-100  p-2" name="header" placeholder="Enter header"
                            required="true" />
                    </div>
                    <div class="mt-3">
                        <input label="First Title" type="text" class="w-100 p-2" name="first_title"
                            placeholder="Enter first title" required="true" />
                    </div>
                    <div class="mt-3">
                        <input label="Second Title" type="text" class="w-100 p-2" name="second_title"
                            placeholder="Enter second title" required="true" />
                    </div>
                    <div class="mt-3">
                        <input label="Short Description" type="text" class="w-100 p-2" name="short_description"
                            placeholder="Enter short description" required="true" />
                    </div>
                    <div class="mt-3">
                        <input label="Button_name" type="text" class="w-100 p-2" name="btn_name"
                            placeholder="Enter button name" required="true" />
                    </div>
                    <div class="mt-3">
                        <input label="Button_url" type="url" class="w-100 p-2" name="btn_url"
                            placeholder="Enter button url" required="true" />
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

            <div class="d-flex gap-3 justify-content-end align-items-center mb-3">
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
