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

    <form action="{{ route('admin.herosection.update', $herosection->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header py-3">
                <h5 class="card-title fs-16">
                    {{ __('General Information') }}
                </h5>
            </div>

            <div class=" p-3">
                <div class="mt-3">
                    <input label="Header" name="header" type="text" required
                        value="{{ old('header', $herosection->header ?? '') }}" class="form-control" />
                    @error('header')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <input label="First Title" name="first_title" type="text" required
                        value="{{ old('first_title', $herosection->first_title ?? '') }}" class="form-control" />
                    @error('first_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <input label="Second Title" name="second_title" type="text" required
                        value="{{ old('second_title', $herosection->second_title ?? '') }}" class="form-control" />
                    @error('second_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <input label="Short Description" name="short_description" type="text" required
                        value="{{ old('short_description', $herosection->short_description ?? '') }}"
                        class="form-control" />
                    @error('short_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                {{-- <div class="mt-3">
                    <input label=" Button name" name="btn_name" type="text" required="true"
                        :value="$herosection->btn_name" />
                </div> --}}
                <div class="mt-3">
                    <input label="Button Name" name="btn_name" type="text" required
                        value="{{ old('btn_name', $herosection->btn_name ?? '') }}" class="form-control" />
                    @error('btn_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mt-3">
                    <input label="Button URL" name="btn_url" type="url" required
                        value="{{ old('btn_url', $herosection->btn_url ?? '') }}" class="form-control" />
                    @error('btn_url')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <!--######## Thumbnail Information ##########-->
            {{-- <div class="row">

                <div class="col-12">
                    <div class="card ">
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
                                    id="preview" alt="" width="100%">
                            </label>
                            <input id="thumbnail" accept="image/*" type="file" name="thumbnail" class="d-none"
                                onchange="previewFile(event, 'preview')">
                            @error('thumbnail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div> --}}

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
                                <img src="{{ $herosection->thumbnail ?? 'https://placehold.co/500x500/f1f5f9/png' }}"
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






            <div class="d-flex gap-3 justify-content-end align-items-center mb-3">
                <a href="{{ route('admin.herosection.index') }}" class="btn btn-primary ">
                    {{ __('Reset') }}
                </a>

                <button type="submit" class="btn btn-lg btn-primary rounded px-5">
                    {{ __('Update') }}
                </button>
            </div>
    </form>
@endsection
