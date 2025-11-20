@extends('admin.layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.product.index') }}">{{ __('Product Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Product') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title">{{ __('General Information') }}</h4>
                </div>

                <div class="card-body">

                    <div class="mt-3">
                        <label for="name" class="form-label fw-bold">
                            Name <span class="text-danger">*</span>
                        </label>
                        <input id="name" type="text" class="w-100 p-2" name="name" placeholder="Enter name"
                            required>
                    </div>

                    <div class="mt-3">
                        <label for="price" class="form-label fw-bold">
                            Price <span class="text-danger">*</span>
                        </label>
                        <input id="price" type="number" class="w-100 p-2" name="price" placeholder="Enter price"
                            step="0.01" min="0" required>
                    </div>

                    <div class="mt-3">
                        <label for="discount_price" class="form-label fw-bold">
                            Discount Price
                        </label>
                        <input id="discount_price" type="number" class="w-100 p-2" name="discount_price"
                            placeholder="Enter discount price">
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
                        <label for="additional_information" class="form-label fw-bold">
                            Additional Information <span class="text-danger">*</span>
                        </label>
                        <input id="additional_information" type="text" class="w-100 p-2" name="additional_information"
                            placeholder="Enter additional information" required>
                    </div>

                    <div class="mt-3">
                        <label for="weight" class="form-label fw-bold">
                            Weight <span class="text-danger">*</span>
                        </label>
                        <input id="weight" type="number" class="w-100 p-2" name="weight" step="0.01" min="0" placeholder="Enter weight"
                            >
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
                <a href="{{ route('admin.product.index') }}" class="btn btn-lg btn-light rounded px-5">Reset</a>
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

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
