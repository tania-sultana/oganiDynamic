@extends('frontend.layouts.app')

@section('content')
    
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
                <form action="" class=" ">
                    <div class="row  ">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label mb-3">First Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label mb-3">Last Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Country <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Address<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2 mb-3" id="exampleFormControlInput1"
                            placeholder="Street Address">
                        <input type="text" class="form-control border-lgt py-2 " id="exampleFormControlInput1"
                            placeholder="Apartment, suite, unite etc (option)">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Town/City<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Country/State<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">TPostcode / ZIP <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label mb-3">Phone<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label mb-3">Email<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>


                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Create an account?
                        </label>
                    </div>
                    <p class="text-secondary mb-4">Create an account by entering the information below. If you are a
                        returning customer please login at the top of the page</p>

                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Account Password<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2" id="exampleFormControlInput1">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ship to a different address?
                        </label>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label mb-3">Order notes<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control border-lgt py-2"
                            placeholder="Notes about your order, e.g. special notes for delivery."
                            id="exampleFormControlInput1">
                    </div>
                </form>
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
                    <div class="border-bottom pb-2 mb-3 text-secondary">
                        <div class="d-flex justify-content-between">
                            <p>Vegetable’s Package</p>
                            <p class="fw-bold">$75.99</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Fresh Vegetable</p>
                            <p class="fw-bold">$151.99
                            </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Organic Bananas</p>
                            <p class="fw-bold">$53.99
                            </p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between border-bottom  mb-3">
                        <p class="fw-bold">Subtotal</p>
                        <p class="fw-bold">$750.99</p>
                    </div>

                    <div class="d-flex justify-content-between border-bottom  mb-3">
                        <p class="fw-bold">Total</p>
                        <p class="fw-bold text-danger">$750.99
                        </p>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Create an account?
                        </label>
                    </div>
                    <p class="text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Check Payment
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Paypal
                        </label>
                    </div>
                    <div class="">
                        <a href="#" class="btn color-bg text-white fw-bold py-2 w-100 para">PLACE ORDER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
