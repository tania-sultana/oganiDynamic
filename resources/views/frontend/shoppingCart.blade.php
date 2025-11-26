@extends('frontend.layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Shopping Cart</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="{{ route('home') }}" class="text-decoration-none text-white fw-bold">Home</a>
            <span>- Shopping Cart</span>
        </div>
    </div>

    <div class="container my-5">

        @if (session('cart_message'))
            <div class="mb-3 p-2 text-white fw-bold" style="background-color:#7FAD39; border-radius:4px;">
                {{ session('cart_message') }}
            </div>
        @endif

        @if ($cartItems->isEmpty())
            <p class="text-center fw-bold">Your cart is empty!</p>
        @else
            <table class="w-100">
                <thead>
                    <tr class="border-bottom">
                        <th class="pb-4">Products</th>
                        <th class="pb-4">Price</th>
                        <th class="pb-4">Quantity</th>
                        <th class="pb-4">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr class="border-bottom">
                            <td>
                                <div class="d-flex firstTd py-4">
                                    <img src="{{ $item->product->thumbnail }}" alt="{{ $item->product->name }}">
                                    <p class="d-flex align-items-md-center ps-1 mb-0">{{ $item->product->name }}</p>
                                </div>
                            </td>
                            <td>
                                <p class="fw-bold mb-0">${{ number_format($item->product->price, 2) }}</p>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div
                                        class="quantity bg-light p-2 d-flex text-center justify-content-center align-items-center">
                                        <button class="btn btn-light text-secondary dec-qty">-</button>
                                        <p class="text-secondary qty px-2 mb-0" data-price="{{ $item->product->price }}">
                                            {{ $item->quantity }}</p>
                                        <button class="btn btn-light text-secondary inc-qty">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-bold mb-0 total-price">
                                    ${{ number_format($item->product->price * $item->quantity, 2) }}</p>
                            </td>
                            <td>
                                <a href="{{ route('user.addToCart.delete', $item->id) }}"><i
                                        class="fa-solid fa-xmark text-secondary"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-between py-4">
                <a href="{{ route('shop') }}" class="btn bg-light py-2 px-3">CONTINUE SHOPPING</a>
                <button class="btn bg-light py-2 px-3"><i class="fa-solid fa-spinner me-1 fa-rotate-90"></i>UPDATE
                    CART</button>
            </div>

            <div class="row pt-5 pb-4">
                <div class="col-lg-6 col-md-12">
                    <h5 class="fw-bold mb-4">Discount Codes</h5>
                    <div class="d-flex mb-5">
                        <input type="text" placeholder="Enter your coupon code" class="border-lgt py-2 text-center">
                        <button class="btn coupon-bg text-white fw-bold para ms-3 py-2 px-3 flex-nowrap cart-btn">APPLY
                            COUPON</button>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="bg-light p-4 ms-lg-2">
                        <h5 class="fw-bold mb-4">Cart Total</h5>
                        <div class="d-flex justify-content-between border-bottom mb-3">
                            <p class="fw-bold send">Subtotal</p>
                            <p id="subtotal" class="fw-bold send text-danger">${{ number_format($subtotal, 2) }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold send">Total</p>
                            <p id="total" class="fw-bold send text-danger">${{ number_format($subtotal, 2) }}</p>
                        </div>

                        <div class="">
                            <a href="{{ route('checkOut') }}"
                                class="btn cart-btn text-white para fw-bold p-2 color-bg w-100">
                                PROCEED TO CHECKOUT
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    </div>
@endsection
