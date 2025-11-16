@extends('frontend.layouts.app')

@section('content')
 <div class="container">
        <div class="wrapper">
            <!-- -------------------------second nav section------------------ -->
            <a class="btn border-dark " id="barToggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="fa-solid fa-bars"></i>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="offcanvas-title" id="offcanvasExampleLabel"> <img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <div class="d-flex gap-4 align-items-center position-relative">
                            <i class="fa-solid fa-heart "></i>
                            <i class="fa-solid fa-briefcase"></i>
                            <span class="heart">1</span>
                            <span class="briefcase">3</span>
                            <p class="para pt-3 ps-1">item: <span class="fw-bold text-dark ">$150.00</span></p>
                        </div>

                        <div class="d-flex gap-3">

                            <div class="d-flex border-end  align-items-center">
                                <img src="{{ asset('assets/images/language.png') }}" alt="flag" />
                                <div class="dropdown">
                                    <button class="btn  para dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        English
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item para" href="#">Spanish</a></li>
                                        <li><a class="dropdown-item para" href="#">English</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="d-flex gap-2 align-items-center para">
                                <i class="fa-solid fa-user "></i>
                                <p class="mb-0 text-center para">Login</p>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown mt-3 res-side d-flex justify-content-end">
                        <button class="btn btn-dark fw-bold my-2 " type="button" data-bs-toggle="dropdown">
                            MENU<i class="fa-solid fa-bars ps-2 "></i>
                        </button>
                        <ul class="dropdown-menu res-side border-0 w-100 mt-0 ps-4">
                            <li><a class="dropdown-item drop-item text-white" href="{{ route('home') }}">Home</a></li>
                            <li><a class="dropdown-item drop-item text-white" href="{{ route('ogani.shop') }}">Shop</a></li>

                            <li><a class="dropdown-item drop-item text-white " href="#">Pages ►</a></li>
                            <li><a class="dropdown-item drop-item text-white" href="{{ route('ogani.blog') }}">Blog</a></li>
                            <li><a class="dropdown-item drop-item text-white"
                                    href="{{ route('ogani.contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="d-flex border-end mt-2 gap-3 align-items-center para">
                        <i class="fa-brands fa-facebook-f "></i>
                        <i class="fa-brands fa-twitter "></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-pinterest-p "></i>
                    </div>

                    <div class="d-flex flex-column mt-4">
                        <div class="d-flex align-items-center gap-1 mt-2">
                            <i class="fa-solid fa-envelope para"></i>
                            <p class="para mb-0 ">hello@colorlib.com</p>
                        </div>
                        <p class="para mt-2">Free Shipping for all Order of $99</p>
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-3">
                    <div>
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-6 hide">
                    <nav class="navbar ">
                        <div class="container-fluid ">
                            <ul class="navbar-nav d-flex flex-row gap-5">
                                <li class="nav-item">
                                    <a class="nav-link  para text-dark fw-bold" aria-current="page"
                                        href="{{ route('home') }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link para text-dark fw-bold" href="{{ route('ogani.shop') }}">SHOP</a>
                                </li>
                                <li class="menu position-relative">
                                    <a class="menu-btn active nav-link para text-dark fw-bold" href="#">PAGES</a>
                                    <ul class="dropdown-list bg-dark py-2 px-3">
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.shopDetails') }}">Shop
                                                Details</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.shoppingCart') }}">Shopping
                                                Cart</a></li>
                                        <li><a class="nav-link active text-decoration-none text-white para"
                                                href="{{ route('ogani.checkOut') }}">Check Out</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.blogDetails') }}">Blog
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  para text-dark fw-bold"
                                        href="{{ route('ogani.blog') }}">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  para text-dark fw-bold"
                                        href="{{ route('ogani.contact') }}">CONTACT</a>
                                </li>
                            </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-12 hide-cls">
                    <div class="d-flex gap-4 align-items-center position-relative">
                        <i class="fa-solid fa-heart "></i>
                        <i class="fa-solid fa-briefcase"></i>
                        <span class="heart">1</span>
                        <span class="briefcase">3</span>
                        <p class="para pt-3 ps-1">item: <span class="fw-bold text-dark ">$150.00</span></p>
                    </div>
                </div>

            </div>
            <!-- ------------------------hero section---------------------- -->
            <div class="row py-2 mb-5">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="dropdown py- d-flex position-relative mb-4 ">
                        <button
                            class="color-bg text-white fw-bold  w-100 allDept d-flex justify-content-start align-items-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars pe-4"></i>All departments
                            <i class="fa-solid fa-angle-down angle"></i>
                        </button>



                        <ul class="dropdown-menu  w-100 ">
                            <li><a class="dropdown-item para" href="#">Fresh Meat</a></li>
                            <li><a class="dropdown-item para" href="#">Vegetables</a></li>
                            <li><a class="dropdown-item para" href="#">Fruit & Nut Gifts</a></li>
                            <li><a class="dropdown-item para" href="#">Fresh Berries</a></li>
                            <li><a class="dropdown-item para" href="#">Ocean Foods</a></li>
                            <li><a class="dropdown-item para" href="#">Butter & Eggs</a></li>
                            <li><a class="dropdown-item para" href="#">Fastfood</a></li>
                            <li><a class="dropdown-item para" href="#">Fresh Onion</a></li>
                            <li><a class="dropdown-item para" href="#">Papayaya & Crisps</a></li>
                            <li><a class="dropdown-item para" href="#">Oatmeal</a></li>
                            <li><a class="dropdown-item para" href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class=" d-flex justify-content-center  border-lgt mb-4 overflow-hidden bg-white ">
                                <div class=" d-flex align-items-center">
                                    <p class="dropdown border-end px-3 mb-0 dropdown-toggle fw-bold sm-hide"
                                        data-bs-toggle="dropdown">
                                        All Categories
                                    </p>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a class="dropdown-item para" href="#">Fresh Meat</a></li>
                                        <li><a class="dropdown-item para" href="#">Vegetables</a></li>
                                        <li><a class="dropdown-item para" href="#">Fruit & Nut Gifts</a></li>
                                        <li><a class="dropdown-item para" href="#">Fresh Berries</a></li>
                                        <li><a class="dropdown-item para" href="#">Ocean Foods</a></li>
                                        <li><a class="dropdown-item para" href="#">Butter & Eggs</a></li>
                                        <li><a class="dropdown-item para" href="#">Fastfood</a></li>
                                        <li><a class="dropdown-item para" href="#">Fresh Onion</a></li>
                                        <li><a class="dropdown-item para" href="#">Papayaya & Crisps</a></li>
                                        <li><a class="dropdown-item para" href="#">Oatmeal</a></li>
                                        <li><a class="dropdown-item para" href="#">Fresh Bananas</a></li>
                                    </ul> --}}
                                </div>

                                <input type="text" class="form-control border-0 flex-grow-1 shadow-none px-3"
                                    placeholder="What do you need?" />
                                <button class=" text-white fw-bold allDept px-2 color-bg ">
                                    SEARCH
                                </button>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="d-flex justify-content-center justify-content-sm-start gap-2">
                                <div class=" phone">
                                    <i class="fa-solid fa-phone  "></i>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center ">
                                    <p class="fw-bold mb-0">+65 11.188.888</p>
                                    <p class="para mb-0 sub-text">support 24/7 time</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <div class="d-flex flex-column p-5 contact mt-4 ">
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
                     <p class="text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

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
