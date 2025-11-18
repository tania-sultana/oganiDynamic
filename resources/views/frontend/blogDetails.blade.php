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
                                    <a class="menu-btn nav-link active para text-dark fw-bold" href="#">PAGES</a>
                                    <ul class="dropdown-list bg-dark py-2 px-3">
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.shopDetails') }}">Shop
                                                Details</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.shoppingCart') }}">Shopping
                                                Cart</a></li>
                                        <li><a class="nav-link text-decoration-none text-white para"
                                                href="{{ route('ogani.checkOut') }}">Check Out</a></li>
                                        <li><a class="nav-link active text-decoration-none text-white para"
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

  <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center mb-4">The Moment You Need To Remove Garlic From The Menu</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white text-center">By Michael Scofield<span class="px-3">|</span>January 14, 2019<span class="px-3">|</span> 8 Comments</a>

        </div>
    </div>
    <!-- --------------------left side------------------------- -->
    <div class="container my-5">
        <div class="row border-bottom mb-5">

            <div class="col-lg-4 col-md-5  order-md-1 order-2">
                <div class="position-relative mb-5">
                    <input type="text" class="form-control shadow-none ps-3 pe-5 py-2 border-lgt input"
                        placeholder="Search" />
                    <i class="fa-solid fa-magnifying-glass search "></i>
                </div>

                <div>
                    <h2 class="fw-bold mt-4 pb-3">Categories</h2>
                    <ul class="list-unstyled">
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">All</a></li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Beauty (20)</a>
                        </li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Food (5)</a></li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Life Style (9)</a>
                        </li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Travel (10)</a>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <h3 class="fw-bold my-4 ">Recent News</h3>
                    <div class="d-flex gap-3 mb-2">
                        <div class="image">
                            <img src="{{asset('assets/images/blog/sr-1.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0 fw-bold">09 Kinds Of Vegetables </p>
                            <p class="mb-0 fw-bold"> Protect The Liver</p>
                            <p class="para mini-text">March 05, 2019</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-2">
                        <div class="image">
                            <img src="{{asset('assets/images/blog/sr-2.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0 fw-bold">Tips You To Balance </p>
                            <p class="mb-0 fw-bold"> Nutrition Meal Day</p>
                            <p class="para mini-text">March 05, 2019</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="image">
                            <img src="{{asset('assets/images/blog/sr-3.jpg')}}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0 fw-bold">4 Principles Help You Lose </p>
                            <p class="mb-0 fw-bold"> Weight With Vegetables</p>
                            <p class="para mini-text">March 05, 2019</p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="fw-bold my-4">Search By</h3>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Apple</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Beauty</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Vegetables</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Fruit</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Healthy Food</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-3 py-2">Lifestyle</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="">
                    <img src="{{asset('assets/images/blogDetails/details-pic.jpg')}}" alt="" class="w-100">
                    <p class="text-secondary py-4">
                        Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit,
                        eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                        tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Curabitur non nulla
                        sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Donec rutrum congue leo
                        eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec
                        sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu
                        erat, accumsan id imperdiet et, porttitor at sem.
                    </p>
                    <h3 class="fw-bold pb-4">
                        The corner window forms a place within a place that is a resting point within the large space.
                    </h3>
                    <p class="text-secondary">
                        The study area is located at the back with a view of the vast nature. Together with the other
                        buildings, a congruent story has been managed in which the whole has a reinforcing effect on the
                        components. The use of materials seeks connection to the main house, the adjacent stables
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="d-flex gap-3 mb-5">
                                <img src="{{asset('assets/images/blogDetails/details-author.jpg')}}" class="rounded-circle" alt="author">
                                <div class="d-flex flex-column justify-content-center ">
                                    <p class="fw-bold mb-0">Michael Scofield</p>
                                    <p class="text-secondary mb-0">Admin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-5">
                                <p class=""><span class="fw-bold">Categories:</span> <span class="sub-text">Food</span>
                                </p>
                                <p><span class="fw-bold">Tags:</span> <span class="sub-text">All, Trending, Cooking,
                                        Healthy Food, Life Style</span></p>

                                <div class="d-flex text-muted gap-3">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-google-plus-g"></i>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------post you may like------------- -->
        <div class="text-center py-4 mb-4">
            <h1 class="heading fw-bold">Post You May Like</h1>
            <div class="underline"></div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <img src="{{asset('assets/images/blog/blog-1.jpg')}}" class="w-100 " alt="ban1">
                <ul class="list-unstyled d-flex gap-3 pt-4 ">
                    <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                    </li>
                    <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                    </li>
                </ul>
                <p class="fw-bold sub-heading">Cooking tips make cooking simple</p>
                <p class="sub-text">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                    quaerat</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <img src="{{asset('assets/images/blog/blog-2.jpg')}}" class="w-100" alt="ban1">
                <ul class="list-unstyled d-flex gap-3 pt-4 ">
                    <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                    </li>
                    <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                    </li>
                </ul>
                <p class="fw-bold sub-heading">6 ways to prepare breakfast for 30</p>
                <p class="sub-text">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                    quaerat</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 ">
                <img src="{{asset('assets/images/blog/blog-3.jpg')}}" class="w-100" alt="ban1">
                <ul class="list-unstyled d-flex gap-3 pt-4 ">
                    <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                    </li>
                    <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                    </li>
                </ul>
                <p class="fw-bold sub-heading">Visit the clean farm in the US</p>
                <p class="sub-text">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                    quaerat</p>

            </div>
        </div>
    </div>
@endsection
