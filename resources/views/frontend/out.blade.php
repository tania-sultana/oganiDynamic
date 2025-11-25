@extends('frontend.layouts.app')

@section('content')

    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4">
        <h1 class="heading fw-bold text-white text-center">Checkout</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="{{ route('home') }}" class="text-decoration-none text-white fw-bold">Home</a>
            <span>- Checkout</span>
        </div>
    </div>

    <div class="container my-5 pt-4">

        <div class="borderT bg-light p-1 d-flex justify-content-center py-2 mb-5">
            <p class="text-secondary mb-0 py-1">
                <i class="fa-solid fa-tag fa-rotate-90 text"></i> Have a coupon?
                <a href="#" class="text-secondary">Click here</a> to enter your code
            </p>
        </div>

        <div class="border-bottom pb-3 pt-3 mb-5">
            <h4 class="fw-bold">Billing Details</h4>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8 col-md-6 col-sm-12">

                {{-- Checkout Form --}}
                <form action="{{ route('ogani.checkout.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control border-lgt py-2" value="{{ old('first_name') }}">
                            @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" class="form-control border-lgt py-2" value="{{ old('last_name') }}">
                            @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Country <span class="text-danger">*</span></label>
                        <input type="text" name="country" class="form-control border-lgt py-2" value="{{ old('country') }}">
                        @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" class="form-control border-lgt py-2" placeholder="Street Address" value="{{ old('address') }}">
                        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Town/City <span class="text-danger">*</span></label>
                        <input type="text" name="city" class="form-control border-lgt py-2" value="{{ old('city') }}">
                        @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">State <span class="text-danger">*</span></label>
                        <input type="text" name="state" class="form-control border-lgt py-2" value="{{ old('state') }}">
                        @error('state') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Postcode <span class="text-danger">*</span></label>
                        <input type="text" name="postcode" class="form-control border-lgt py-2" value="{{ old('postcode') }}">
                        @error('postcode') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control border-lgt py-2" value="{{ old('phone') }}">
                            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control border-lgt py-2" value="{{ old('email') }}">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                </form>

            </div>

            {{-- Order Summary --}}
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="bg-light px-4 pt-4 pb-5">

                    <h4 class="fw-bold border-bottom pb-3 mb-4">Your Order</h4>

                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="fw-bold">Product</h5>
                        <h5 class="fw-bold">Total</h5>
                    </div>

                    <div class="border-bottom pb-2 mb-3 text-secondary">

                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach ($cart as $item)
                            <div class="d-flex justify-content-between">
                                <p>{{ $item['name'] }} (x{{ $item['quantity'] }})</p>
                                <p class="fw-bold">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                            </div>

                            @php
                                $subtotal += $item['price'] * $item['quantity'];
                            @endphp
                        @endforeach

                    </div>

                    <div class="d-flex justify-content-between border-bottom mb-3">
                        <p class="fw-bold">Subtotal</p>
                        <p class="fw-bold">${{ number_format($subtotal, 2) }}</p>
                    </div>

                    <div class="d-flex justify-content-between border-bottom mb-3">
                        <p class="fw-bold">Total</p>
                        <p class="fw-bold text-danger">${{ number_format($subtotal, 2) }}</p>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="payment_method" value="cod">
                        <label class="form-check-label">Cash on Delivery</label>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="payment_method" value="paypal">
                        <label class="form-check-label">PayPal</label>
                    </div>

                    <button type="submit" form="checkout-form" class="btn color-bg text-white fw-bold py-2 w-100">
                        PLACE ORDER
                    </button>
                </div>
            </div>

        </div>
    </div>

@endsection
