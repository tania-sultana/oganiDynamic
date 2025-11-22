@extends('admin.layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.blog.index') }}">{{ __('Blog Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Blog') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title">{{ __('General Information') }}</h4>
                </div>

                <div class="card-body">

                    <div class="mt-3">
                        <label for="first_title" class="form-label fw-bold">
                            First Title <span class="text-danger">*</span>
                        </label>
                        <input id="first_title" type="text" class="w-100 p-2" name="first_title"
                            placeholder="Enter first_title" required>
                    </div>

                    <div class="mt-3">
                        <label for="second_title" class="form-label fw-bold">
                            Second Title <span class="text-danger">*</span>
                        </label>
                        <input id="second_title" type="text" class="w-100 p-2" name="second_title"
                            placeholder="Enter second_title" required>
                    </div>

                    <div class="mt-3">
                        <label for="name" class="form-label fw-bold">
                            Name <span class="text-danger">*</span>
                        </label>
                        <input id="name" type="text" class="w-100 p-2" name="name" placeholder="Enter name"
                            required>
                    </div>

                    <div class="mt-3">
                        <label for="designation" class="form-label fw-bold">
                            Designation <span class="text-danger">*</span>
                        </label>
                        <input id="designation" type="text" class="w-100 p-2" name="designation"
                            placeholder="Enter Designation" required>
                    </div>

                    <div class="mt-3">
                        <label for="short_description" class="form-label fw-bold">
                            Short Description <span class="text-danger">*</span>
                        </label>
                        <input id="short_description" type="text" class="w-100 p-2" name="short_description"
                            placeholder="Enter short description" required>
                    </div>

                    <div class="mt-3">
                        <label for="description" class="form-label fw-bold">
                            Description <span class="text-danger">*</span>
                        </label>
                        <div id="editor" style="max-height: 750px; overflow-y: auto">
                            {!! old('description') !!}
                        </div>
                        <input type="hidden" id="description" name="description" value="{{ old('description') }}">
                        @error('description')
                            <p class="text text-danger m-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="category" class="form-label fw-bold">
                            Category <span class="text-danger">*</span>
                        </label>
                        <input id="category" type="text" class="w-100 p-2" name="category" placeholder="Enter category"
                            required>
                    </div>

                    <div class="mt-3">
                        <label for="tags" class="form-label fw-bold">
                            Tags <span class="text-danger">*</span>
                        </label>
                        <input id="tags" type="text" class="w-100 p-2" name="tags" placeholder="Enter tags"
                            required>
                    </div>

                </div>


                <!--######## Thumbnail Information ##########-->

                <div class="d-flex justify-content-center align-items-around">

    <!-- First Thumbnail -->
    <div>
        <div class="card-header py-3">
            <h4 class="card-title fs-16 m-0">
                {{ __('First Thumbnail') }}
                <span class="text-primary">{{ __('(500 x 500)') }}</span>
            </h4>
        </div>
        <div class="card-body">
            <label for="first_thumbnail" class="additionThumbnail">
                <img src="{{ asset('assets/images/default.jpg') }}"
                     id="preview_first"
                     alt="first_thumbnail"
                     width="15rem" height="15rem" >
            </label>

            <input id="first_thumbnail"
                accept="image/*"
                type="file"
                name="first_thumbnail"
                class="d-none w-25 h-25"
                onchange="previewFile(event, 'preview_first')">

            @error('first_thumbnail')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Second Thumbnail -->
    <div>
        <div class="card-header py-3">
            <h4 class="card-title fs-16 m-0">
                {{ __('Second Thumbnail') }}
                <span class="text-primary">{{ __('(500 x 500)') }}</span>
            </h4>
        </div>
        <div class="card-body">
            <label for="second_thumbnail" class="additionThumbnail">
                <img src="{{ asset('assets/images/default.jpg') }}"
                     id="preview_second"
                     alt="second_thumbnail"
                     width="15rem" height="15rem">
            </label>

            <input id="second_thumbnail"
                accept="image/*"
                type="file"
                name="second_thumbnail"
                class="d-none w-25 h-25"
                onchange="previewFile(event, 'preview_second')">

            @error('second_thumbnail')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

</div>
            </div>




            <div class="d-flex gap-3 justify-content-end align-items-center mb-3">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-lg btn-light rounded px-5">Reset</a>
                <button type="submit" class="btn btn-lg btn-primary rounded px-5">Submit</button>
            </div>
    </form>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/quill.snow.css') }}">
@endpush
@push('scripts')
    <script>
        // ul tag from quill
        correctULTagFromQuill = (str) => {
            if (str) {
                let re = /(<ol><li data-list="bullet">)(.*?)(<\/ol>)/;
                let strArr = str.split(re);

                while (
                    strArr.findIndex((ele) => ele === '<ol><li data-list="bullet">') !== -1
                ) {
                    let index = strArr.findIndex(
                        (ele) => ele === '<ol><li data-list="bullet">'
                    );
                    if (index) {
                        strArr[index] = '<ul><li data-list="bullet">';
                        let endTagIndex = strArr.findIndex((ele) => ele === "</ol>");
                        strArr[endTagIndex] = "</ul>";
                    }
                }
                return strArr.join("");
            }
            return str;
        };
        // quill editor
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],
                    [{
                        'font': []
                    }],
                    ['bold', 'italic', 'underline', 'strike', 'blockquote'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'align': []
                    }],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    [{
                        'direction': 'rtl'
                    }],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    ['link', 'image', 'video', 'formula']
                ]
            }
        });

        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById('description').value = correctULTagFromQuill(quill.root.innerHTML);
        });
    </script>
@endpush
<script>
    function previewFile(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => preview.src = e.target.result;
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

