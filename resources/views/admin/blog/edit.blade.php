@extends('admin.layouts.app')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.blog.index') }}">{{ __('Blog Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Blog Section') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
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
                    <label for="first_title" class="form-label fw-bold">First Title</label>
                    <textarea id="first_title" name="first_title" class="form-control">{{ old('first_title', $blog->first_title ?? '') }}</textarea>
                    @error('first_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="second_title" class="form-label fw-bold">Second Title</label>
                    <textarea id="second_title" name="second_title" class="form-control">{{ old('second_title', $blog->second_title ?? '') }}</textarea>
                    @error('second_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="name" class="form-label fw-bold">
                        Name <span class="text-danger">*</span>
                    </label>
                    <input id="name" name="name" type="text" class="form-control" required
                        value="{{ old('name', $blog->name ?? '') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="designation" class="form-label fw-bold">Designation</label>
                    <textarea id="designation" name="designation" class="form-control">{{ old('designation', $blog->designation ?? '') }}</textarea>
                    @error('designation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="short_description" class="form-label fw-bold">Short Description</label>
                    <input id="short_description" name="short_description" type="text" class="form-control"
                        value="{{ old('short_description', $blog->short_description ?? '') }}">
                    @error('short_description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea id="description" name="description" class="form-control">{{ old('description', $blog->description ?? '') }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="category" class="form-label fw-bold">Category</label>
                    <textarea id="category" name="category" class="form-control">{{ old('category', $blog->category ?? '') }}</textarea>
                    @error('category')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="tag" class="form-label fw-bold">Tag</label>
                    <textarea id="tag" name="tag" class="form-control">{{ old('tag', $blog->tag ?? '') }}</textarea>
                    @error('tag')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <!--######## Thumbnail Information ##########-->

            <div class="d-flex justify-content-around">
                <!-- First Thumbnail -->
                <div class="p-3">
                    <div class="card-header py-3">
                        <h4 class="card-title fs-16 m-0">
                            {{ __('First Thumbnail') }}
                            <span class="text-primary">{{ __('(500 x 500)') }}</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <label for="first_thumbnail" class="additionThumbnail">
                            <img src="{{ $blog->firstThumbnail }}"
                                id="preview_first" alt="First Thumbnail Preview"
                                style="width: 15rem; height: 15rem; object-fit: cover;">
                        </label>

                        <input id="first_thumbnail" accept="image/*" type="file" name="first_thumbnail" class="d-none"
                            onchange="previewFile(event, 'preview_first')">

                        @error('first_thumbnail')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Second Thumbnail -->
                <div class="p-3">
                    <div class="card-header py-3">
                        <h4 class="card-title fs-16 m-0">
                            {{ __('Second Thumbnail') }}
                            <span class="text-primary">{{ __('(500 x 500)') }}</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <label for="second_thumbnail" class="additionThumbnail">
                            <img src="{{ $blog->secondThumbnail }}"
                                id="preview_second" alt="Second Thumbnail Preview"
                                style="width: 15rem; height: 15rem; object-fit: cover;">
                        </label>

                        <input id="second_thumbnail" accept="image/*" type="file" name="second_thumbnail"
                            class="d-none" onchange="previewFile(event, 'preview_second')">

                        @error('second_thumbnail')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            </div>


            <div class="d-flex gap-3 justify-content-end align-items-center mb-3 me-3">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-primary ">
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
            document.getElementById(previewId).src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
