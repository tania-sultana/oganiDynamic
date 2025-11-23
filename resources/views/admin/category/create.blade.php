@extends('admin.layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.category.index') }}">{{ __('Category Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New Category') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title">{{ __('General Information') }}</h4>
                </div>

                <div class="card-body">
                    <div class="mt-3">
                        <label for="name" class="form-label fw-bold">
                            Category name <span class="text-danger">*</span>
                        </label>
                        <input id="name" type="text" class="w-100 p-2" name="name"
                            placeholder="Enter category name" required>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3 justify-content-end align-items-center mb-3">
                <a href="{{ route('admin.category.index') }}" class="btn btn-lg btn-light rounded px-5">Reset</a>
                <button type="submit" class="btn btn-lg btn-primary rounded px-5">Submit</button>
            </div>
    </form>
@endsection



