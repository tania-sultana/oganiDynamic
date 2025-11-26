@extends('frontend.layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card p-5">
                <h1 class="text mb-4">Thank you for your order!</h1>
                <p class="mb-4">Your order has been placed successfully. We will process it shortly.</p>
                <a href="{{ route('home') }}" class="btn cart-btn text-white para fw-bold p-2 color-bg w-100">Return to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
