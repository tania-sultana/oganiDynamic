@extends('admin.layouts.app')

@section('content')
    <div class="card-header py-3">
        <h4 class="card-title">Product Details</h4>
    </div>

    <div class="card p-3">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                <img class="img-fluid rounded" src="{{ $product->thumbnail }}" alt="product">
            </div>
        </div>

        <div class="new-arrival-content pr">
            <h4>{{ $product->name }}</h4>
        </div>
        <div class="new-arrival-content pr">
            <h6>{{ __('Price') }}</h6>
            <div>
                {!! $product->price !!}
            </div>
        </div>
        <div class="new-arrival-content pr">
             <h6>{{ __('Discount Price') }}</h6>
            <div>
                {!! $product->discount_price !!}
            </div>
        </div>
        <div class="product-detail-content mt-3">
            <h6>{{ __('Short Description') }}</h6>
            <div>
                {!! $product->short_description !!}
            </div>
        </div>
        <div class="product-detail-content mt-3">
            <h6>{{ __('Description') }}</h6>
            <div>
                {!! $product->description !!}
            </div>
        </div>
        <div class="product-detail-content mt-3">
            <h6>{{ __('Additional Information') }}</h6>
            <div>
                {!! $product->additional_information !!}
            </div>
        </div>
        <div class="product-detail-content mt-3">
            <h6>{{ __('Weight') }}</h6>
            <div>
                {!! $product->weight !!}
            </div>
        </div>

    </div>


    <div class="d-flex gap-3 justify-content-end align-items-center my-3">
        <a href="{{ route('admin.product.index') }}" class="btn btn-lg btn-primary rounded px-5">Reset</a>
    </div>
@endsection
