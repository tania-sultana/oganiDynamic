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
                                        <li><a class="nav-link active text-decoration-none text-white para"
                                                href="{{ route('ogani.shoppingCart') }}">Shopping
                                                Cart</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
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
                            <img src="images/shopping-cart/cart-1.jpg" class="" alt="c1">
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
                            <img src="images/shopping-cart/cart-2.jpg" class="" alt="c1">
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
                            <img src="images/shopping-cart/cart-3.jpg" class="" alt="c1">
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
