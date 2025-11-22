@extends('admin.layouts.app')
@section('header-title', __('Add New Social link'))
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.blog.index') }}">{{ __('Blog') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Social link') }}</a>
            </li>
        </ol>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blog.socialLink.store', $blog->id) }}" method="POST" class="mx-5 w-75"
            >
            @csrf
            <div class="form-row">
                <div class="mt-3">
                    <label for="facebook" class="form-label fw-bold">
                        Facebook <span class="text-danger">*</span>
                    </label>
                    <input id="facebook" type="text" class="w-100 p-2" name="facebook" placeholder="Enter facebook link"
                        value="{{ old('facebook', $blog?->sicialLink?->facebook) }}" required>
                </div>

                <div class="mt-3">
                    <label for="twitter" class="form-label fw-bold">
                        Twitter <span class="text-danger">*</span>
                    </label>
                    <input id="twitter" type="text" class="w-100 p-2" name="twitter" placeholder="Enter twitter link"
                        value="{{ old('twitter', $blog?->sicialLink?->twitter) }}" required>
                </div>

                <div class="mt-3">
                    <label for="linkedin" class="form-label fw-bold">
                        Linkedin <span class="text-danger">*</span>
                    </label>
                    <input id="linkedin" type="text" class="w-100 p-2" name="linkedin" placeholder="Enter linkedin link"
                        value="{{ old('linkedin', $blog?->sicialLink?->linkedin) }}" required>
                </div>
                <div class="mt-3">
                    <label for="instagram" class="form-label fw-bold">
                        Instagram <span class="text-danger">*</span>
                    </label>
                    <input id="instagram" type="text" class="w-100 p-2" name="instagram" placeholder="Enter instagram link"
                        value="{{ old('instagram', $blog?->sicialLink?->instagram) }}" required>
                </div>

                <div class="mt-3">
                    <label for="whatsapp" class="form-label fw-bold">
                        Whatsapp <span class="text-danger">*</span>
                    </label>
                    <input id="whatsapp" type="text" class="w-100 p-2" name="whatsapp" placeholder="Enter whatsapp link"
                        value="{{ old('whatsapp', $blog?->sicialLink?->whatsapp) }}"  required    >
                </div>

                <button type="submit" class="btn btn-lg btn-primary rounded px-5 mt-3">
                    {{ __('Submit') }}
                </button>
            </div>

        </form>


    </div>
@endsection
