@extends('admin.layouts.app')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.category.index') }}">{{ __('category Section') }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0);">{{ __('Add New category Section') }}</a>
            </li>
        </ol>
    </div>

    <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header py-3">
                <h5 class="card-title fs-16">
                    {{ __('General Information') }}
                </h5>
            </div>

            <div class="p-3">
                <div class="mt-3">
                    <label for="name" class="form-label fw-bold">
                        Category Name <span class="text-danger">*</span>
                    </label>
                    <input id="name" name="name" type="text" class="form-control" required
                        value="{{ old('name', $category->name ?? '') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex gap-3 justify-content-end align-items-center mb-3 me-3">
                <a href="{{ route('admin.category.index') }}" class="btn btn-primary ">
                    {{ __('Reset') }}
                </a>

                <button type="submit" class="btn btn-lg btn-primary rounded px-5">
                    {{ __('Update') }}
                </button>
            </div>
    </form>
@endsection
