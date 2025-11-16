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
                                    <a class="menu-btn nav-link para text-dark fw-bold" href="#">PAGES</a>
                                    <ul class="dropdown-list bg-dark py-2 px-3">
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.shopDetails') }}">Shop
                                                Details</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
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
                                    <a class="nav-link active para text-dark fw-bold"
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
        <h1 class="heading fw-bold text-white text-center">Contact Us</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home </a>
            <span>- Contact Us</span>
        </div>
    </div>




    <!-- -------------------map----------------------- -->
    <div class="container">
        <div class="row my-5 ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-solid fa-phone text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Phone </p>
                    <p class=" sub-text">+01-3-8888-6868</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-solid fa-location-dot text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Address </p>
                    <p class="sub-text">60-49 Road 11378 New York</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-regular fa-clock text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Open time </p>
                    <p class="sub-text">10:00 am to 23:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-regular fa-envelope text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Email </p>
                    <p class="sub-text">hello@colorlib.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- -------map ------------------ -->


    <div class="map-container mb-5 py-5 position-relative">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.404421167531!2d90.35478671158252!3d23.768608878568884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a18afe7eab%3A0x57ec2dfc2920c0b0!2sShekhertek%20Rd.8%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1762341315662!5m2!1sen!2sbd"
            class="map-size" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="card map-card center-card shadow text-center">
            <div class="card-body p-4">
                <h4 class="card-title mb-3 fw-bold">New York</h4>
                <p class="card-text mb-1">Phone: +12-345-6789</p>
                <p class="card-text">Add: 16 Creek Ave. Farmingdale, NY</p>
            </div>
        </div>

    </div>
    <!-- --------------------------------message section-------------- -->
    <div class="container">
        <h1 class="fw-bold text-center mb-5">Leave Message</h1>
        <div class="">
            <div class="d-flex justify-content-between gap-5 mb-3">
                <div class="mb-3 flex-grow-1 ">
                    <input type="text" class="form-control py-2 border-lgt" placeholder=" Your name">
                </div>
                <div class="mb-3 flex-grow-1">
                    <input type="text" class="form-control border-lgt py-2" placeholder="Your email">
                </div>
            </div>
            <div class="mb-4">
                <textarea name="" id="" cols="30" rows="6" class="form-control border-lgt"
                    placeholder="Your message"></textarea>
            </div>
            <div class="d-flex justify-content-center pt-2 pb-4 mb-5">
                <button class="btn send text-white fw-bold py-3 px-4 color-bg ">SEND MESSAGE</button>
            </div>
        </div>
    </div>

@endsection
