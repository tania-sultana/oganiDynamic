@extends('frontend.layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Vegetable’s Package</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
            <a href="index.html" class=" text-decoration-none text-white fw-bold">- Pages</a>
            <span>- Shopping Cart</span>
        </div>
    </div>

    <div class="container my-5">

        <table class="w-100 ">
            <thead>
                <tr class="border-bottom ">
                    <th class="pb-4 ">Products</th>
                    <th class="pb-4">Price</th>
                    <th class="pb-4">Quantity</th>
                    <th class="pb-4">Total</th>
                </tr>

            </thead>
            <tbody>
                <tr class="border-bottom ">
                    <td>
                        <div class="d-flex firstTd py-4">
                            <img src="{{ asset('assets/images/shopping-cart/cart-1.jpg') }}" class=""
                                alt="c1">
                            <p class=" d-flex align-items-md-center ps-1 mb-0"> Vegetable’s Package</p>
                        </div>
                    </td>
                    <td>
                        <p class="fw-bold mb-0">$55.00</p>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="quantity bg-light p-2 d-flex  text-center justify-content-center">
                                <p class="text-secondary dec-qty mb-0">-</p>
                                <p class="text-secondary qty px-2 mb-0">1</p>
                                <p class="text-secondary inc-qty mb-0">+</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap">
                            <p class="me-lg-5 me-sm-4 me-sm-1 mb-0 fw-bold ">$110.00</p>
                            <a><i class="fa-solid fa-xmark text-secondary"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="border-bottom ">
                    <td>
                        <div class="d-flex firstTd py-4">
                            <img src="{{ asset('assets/images/shopping-cart/cart-2.jpg') }}" class=""
                                alt="c1">
                            <p class=" d-flex align-items-md-center ps-1 mb-0"> Fresh Garden Vegetablee</p>
                        </div>
                    </td>
                    <td>
                        <p class="fw-bold mb-0">$39.00</p>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="quantity bg-light p-2 d-flex  text-center justify-content-center">
                                <p class="text-secondary dec-qty mb-0">-</p>
                                <p class="text-secondary qty px-2 mb-0">1</p>
                                <p class="text-secondary inc-qty mb-0">+</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap">
                            <p class="me-lg-5 me-sm-4 me-sm-1 mb-0 fw-bold ">$39.00</p>
                            <a><i class="fa-solid fa-xmark text-secondary"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="border-bottom ">
                    <td>
                        <div class="d-flex firstTd py-4">
                            <img src="{{ asset('assets/images/shopping-cart/cart-3.jpg') }}" class=""
                                alt="c1">
                            <p class=" d-flex align-items-md-center ps-1 mb-0"> Organic Bananas</p>
                        </div>
                    </td>
                    <td>
                        <p class="fw-bold mb-0">$69.00</p>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="quantity bg-light p-2 d-flex  text-center justify-content-center">
                                <p class="text-secondary dec-qty mb-0">-</p>
                                <p class="text-secondary qty px-2 mb-0">1</p>
                                <p class="text-secondary inc-qty mb-0">+</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-nowrap">
                            <p class="me-lg-5 me-sm-4 me-sm-1 mb-0 fw-bold ">$69.00</p>
                            <a><i class="fa-solid fa-xmark text-secondary"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between py-4 ">
            <button class="btn bg-light py-2 px-3">CONTINUE SHOPPING</button>
            <button class="btn bg-light py-2 px-3"><i class="fa-solid fa-spinner me-1 fa-rotate-90"></i>UPDATE
                CART</button>
        </div>
        <div class="row pt-5 pb-4">
            <div class="col-lg-6 col-md-12">
                <h5 class="fw-bold mb-4">Discount Codes</h5>
                <div class="d-flex mb-5">
                    <input type="text" placeholder="Enter your coupon code" class="border-lgt py-2  text-center">
                    <button class="btn coupon-bg text-white fw-bold para ms-3 py-2 px-3 flex-nowrap cart-btn ">APPLY
                        COUPON</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="bg-light p-4 ms-lg-2 ">
                    <h5 class="fw-bold mb-4">Cart Total</h5>
                    <div class="d-flex justify-content-between border-bottom mb-3">
                        <p class="fw-bold send ">Subtotal</p>
                        <p class="fw-bold send text-danger">$454.98</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="fw-bold send">Total</p>
                        <p class="fw-bold send text-danger">$454.98</p>
                    </div>
                    <div class="">
                        <a href="#" class="btn color-bg text-white fw-bold py-2 w-100 para">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
