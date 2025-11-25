{{-- resources/views/frontend/checkout-success.blade.php --}}

@extends('layouts.app') {{-- or your frontend layout --}}

@section('title', 'Checkout Success')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="card p-5">
                <h1 class="text-success mb-4">Thank you for your order!</h1>
                <p class="mb-4">Your order has been placed successfully. We will process it shortly.</p>
                <a href="{{ route('ogani.home') }}" class="btn btn-primary">Return to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
