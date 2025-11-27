@extends('frontend.layouts.app')

@section('content')
    <form action="{{ route('checkOut.store') }}" method="post">
        @csrf
        <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
            <h1 class="heading fw-bold text-white text-center">Checkout</h1>
            <div class="d-flex justify-content-center text-white gap-2">
                <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
                <a href="index.html" class=" text-decoration-none text-white fw-bold">- Pages</a>
                <span>- Checkout</span>
            </div>
        </div>

        <div class="container my-5 pt-4 ">
            <div class="borderT bg-light p-1 d-flex justify-content-center py-2 mb-5">
                <p class="text-secondary mb-0 py-1"><i class="fa-solid fa-tag fa-rotate-90 text"></i> Have a coupon? <a
                        href="#" class="text-secondary">Click here</a> to enter your code</p>
            </div>
            <div class="border-bottom pb-3 pt-3 mb-5">
                <h4 class="fw-bold ">Billing Details</h4>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label class="form-label mb-3">First Name<span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control border-lgt py-2">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label class="form-label mb-3">Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control border-lgt py-2">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-3">Country<span class="text-danger">*</span></label>
                        <input type="text" name="country" class="form-control border-lgt py-2">
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-3">Address<span class="text-danger">*</span></label>
                        <input type="text" name="address" class="form-control border-lgt py-2 mb-3"
                            placeholder="Street Address">
                        <input type="text" name="address_optional" class="form-control border-lgt py-2"
                            placeholder="Apartment, suite, unit etc (optional)">
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-3">Town/City<span class="text-danger">*</span></label>
                        <input type="text" name="city" class="form-control border-lgt py-2">
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-3">Country/State<span class="text-danger">*</span></label>
                        <input type="text" name="state" class="form-control border-lgt py-2">
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-3">Postcode / ZIP<span class="text-danger">*</span></label>
                        <input type="text" name="postcode" class="form-control border-lgt py-2">
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="phone" class="form-label mb-3">Phone<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control border-lgt py-2" id="phone">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="email" class="form-label mb-3">Email<span
                                        class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control border-lgt py-2" id="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="create_account" value="1"
                            id="createAccount">
                        <label class="form-check-label" for="createAccount">
                            Create an account?
                        </label>
                    </div>

                    <p class="text-secondary mb-4">
                        Create an account by entering the information below. If you are a returning customer please login at
                        the top of the page.
                    </p>

                    <div class="mb-4">
                        <label for="account_password" class="form-label mb-3">Account Password<span
                                class="text-danger">*</span></label>
                        <input type="password" name="account_password" class="form-control border-lgt py-2"
                            id="account_password">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="ship_different_address" value="1"
                            id="shipDifferentAddress">
                        <label class="form-check-label" for="shipDifferentAddress">
                            Ship to a different address?
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="order_notes" class="form-label mb-3">Order notes<span
                                class="text-danger">*</span></label>
                        <input type="text" name="order_notes" class="form-control border-lgt py-2"
                            placeholder="Notes about your order, e.g. special notes for delivery." id="order_notes">
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="bg-light px-4 pt-4 pb-5">
                        <div class="border-bottom pb-3 mb-4">
                            <h4 class="fw-bold">Your Order</h4>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="fw-bold">Product</h5>
                            <h5 class="fw-bold">Total</h5>
                        </div>

                        @php
                            $total = 0;
                        @endphp

                        <div class="border-bottom pb-2 mb-3 text-secondary">
                            @foreach ($items as $item)
                                @if ($item->product)
                                    <div class="d-flex justify-content-between">
                                        <p>{{ $item->product->name }}</p>
                                        <p class="fw-bold">${{ number_format($item->product->price, 2) }}</p>
                                    </div>

                                    @php
                                        $total += $item->product->price * $item->quantity;
                                    @endphp
                                @else
                                    @php
                                        $cartUnavailable = true;
                                    @endphp
                                @endif
                            @endforeach

                            @if ($cartUnavailable)
                                <div class="d-flex justify-content-between text-danger">
                                    <p>Product not available</p>
                                    <p class="fw-bold">$0.00</p>
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between border-bottom mb-3">
                            <p class="fw-bold">Total</p>
                            <p class="fw-bold text-danger">${{ number_format($total, 2) }}</p>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label" for="flexCheckDefault1">
                                Create an account?
                            </label>
                        </div>
                        <p class="text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua.</p>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                Check Payment
                            </label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">
                                Paypal
                            </label>
                        </div>
                        {{-- all hidden input --}}
                        <input type="hidden" name="total_price" value="{{ $total }}">

                        <button type="submit" class="btn cart-btn text-white para fw-bold p-2 color-bg w-100">PLACE
                            ORDER</button>
                    </div>
                </div>
            </div>


        </div>
    </form>
@endsection
