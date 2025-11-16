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
                                    <a class="nav-link active para text-dark fw-bold" href="{{ route('ogani.shop') }}">SHOP</a>
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
    <div class="d-flex flex-column p-5 contact mt-4 " style="background-image: url('{{ asset('assets/images/contact/contact.jpg') }}'); height: 18vh;">

        <h1 class="heading fw-bold text-white text-center">Organi Shop</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
            <span>- Shop</span>
        </div>
    </div>
    <!-- --------------------left side------------------------- -->
    <div class="container my-5">
        <div class="row">

            <div class="col-lg-3 col-md-5 col-sm-12 ">
                <div>
                    <h2 class="fw-bold mt-4">Department</h2>
                    <ul class="list-unstyled">
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Fresh Meat</a></li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Fruit & Nut
                                Gifts</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Fresh Berries</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Ocean Foods</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Butter & Eggs</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Fastfood</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Fresh Onion</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Papayaya &
                                Crisps</a>
                        </li>
                        <li class="pb-3 "><a href="#" class="sub-text category text-decoration-none">Oatmeal</a>
                        </li>
                    </ul>
                </div>

                <div class="py-3">
                    <h4 class="fw-bold  mb-2">Price</h4>
                    <div class="range-slider">
                        <div class="slider-track" id="sliderTrack"></div>
                        <input type="range" id="minRange" min="0" max="540" value="0">
                        <input type="range" id="maxRange" min="0" max="540" value="540">
                    </div>
                    <p class="fw-bold text-danger pb-3" id="priceDisplay">$0 - $540</p>

                    <!-------------------- Colors -------------------->
                    <h4 class="fw-bold my-3">Price</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="color-option"><span class="color-circle"
                                    style="background:white; border:1px solid #999;"></span>White</div>
                        </div>

                        <div class="col-6">
                            <div class="color-option"><span class="color-circle" style="background:red;"></span>Red
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="color-option"><span class="color-circle" style="background:blue;"></span>Blue
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="color-option"><span class="color-circle" style="background:gold;"></span>Gray
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="color-option"><span class="color-circle" style="background:black;"></span>Black
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="color-option"><span class="color-circle" style="background:green;"></span>Green
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="fw-bold my-4">Popular Size</h3>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-4 py-2">Large</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-4 py-2">Medium</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-4 py-2">Small</a>
                        <a href="#" class="sub-text tag text-decoration-none bg-light px-4 py-2">Tiny</a>
                    </div>
                </div>
<div class="prod-slider-container">
        <div class="prod-slider-header">
            <h2>Latest Products</h2>
            <div class="prod-slider-controls">
                <button class="prod-prev-btn" aria-label="Previous Products"><i class="fas fa-chevron-left"></i></button>
                <button class="prod-next-btn" aria-label="Next Products"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="prod-slider-wrapper">
            <div class="prod-slider-track">
                <div class="prod-slider-column">
                    <div class="prod-slider-item">
                        <img src="images/latestP/lp-1.jpg" alt="Spinach Greens">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/latestP/lp-2.jpg" alt="Bell Peppers">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/latestP/lp-3.jpg" alt="Fried Chicken">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                </div>

                <div class="prod-slider-column">
                    <div class="prod-slider-item">
                        <img src="images/product/feature-7.jpg" alt="Bottled Water">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/product/feature-5.jpg" alt="Red Grapes">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/product/feature-4.jpg" alt="Fresh Strawberries">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                </div>

                <div class="prod-slider-column">
                    <div class="prod-slider-item">
                        <img src="images/product/feature-3.jpg" alt="Canned Tuna">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/product/feature-2.jpg" alt="Bread Loaf">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                    <div class="prod-slider-item">
                        <img src="images/product/feature-1.jpg" alt="Coffee Beans">
                        <div class="prod-details">
                            <p>Crab Pool Security</p>
                            <p class="prod-price">$30.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-12">
                <div class="carousel-container">
                    <div class="carousel-track">
                        <div class="product-card text-center interactive" data-category="oranges">
                            <div class="position-relative mb-4">
                                <img src="images/product/feature-1.jpg" alt="Burger">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                                <div class="discount">
                                    <p>-20%</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="text-secondary para mb-1">Fast Food</p>
                                <p class="mb-2">Delicious Burger</p>
                                <p class="product-price">$12.00 <span class="ps-2 text-muted para">$15.00</span></p>
                            </div>
                        </div>

                        <div class="product-card text-center interactive" data-category="dried-fruit">
                            <div class="position-relative mb-4">
                                <img src="images/product/feature-2.jpg" alt="Grapes">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                                <div class="discount">
                                    <p>-20%</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="text-secondary para mb-1">Dried Fruit</p>
                                <p class="mb-2">Raisin'n'nuts</p>
                                <p class="product-price">$30.00 <span class=" ps-2 text-muted para">$36.00</span></p>
                            </div>
                        </div>

                        <div class="product-card text-center interactive" data-category="dried-fruit">
                            <div class="position-relative mb-4">
                                <img src="images/product/feature-3.jpg" alt="Fruit Mix">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                                <div class="discount">
                                    <p>-20%</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="text-secondary para mb-1">Dried Fruit</p>
                                <p class="mb-2">Raisin'n'nuts</p>
                                <p class="product-price">$30.00 <span class=" ps-2 text-muted para">$36.00</span></p>
                            </div>
                        </div>

                        <div class="product-card text-center interactive" data-category="vegetables">
                            <div class="position-relative mb-4">
                                <img src="images/product/feature-4.jpg" alt="Vegetables">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                                <div class="discount">
                                    <p>-20%</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                                <p class="text-secondary para mb-1">Vegetables</p>
                                <p class="mb-2">Vegetables Box</p>
                                <p class="product-price">$30.00 <span class=" ps-2 text-muted para">$36.00</span></p>
                            </div>
                        </div>
                        <!-- Product Cards End -->
                    </div>
                </div>

                <div class="carousel-controller border-bottom pb-5 mb-5">
                    <input type="radio" id="slide1" name="carousel-radio" checked>
                    <label for="slide1" class="circle"></label>

                    <input type="radio" id="slide2" name="carousel-radio">
                    <label for="slide2" class="circle"></label>
                </div>

                <div class="pt-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle p-0 fw-bold" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><span class="text-secondary pe-2">Sort By</span>
                                Default
                            </button>
                            <ul class="dropdown-menu text-center shadow border-lgt">
                                <li class="bg-light"><a class="dropdown-item fw-bold" href="#">Default</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
                        </div>

                        <div class="d-flex flex-wrap">
                            <p class="fw-bold ">16</p>
                            <p class="text-secondary ps-2">Products found</p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="fa fa-th-large text-secondary  "></i>
                            <i class="fa fa-list text-secondary"></i>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive  ">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/feature-1.jpg" class="w-100" alt="Diced Meat">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card  text-center interactive">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/feature-2.jpg" class="w-100" alt="Bananas">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive">
                                <div class="position-relative mb-4">
                                    <img src="images/product/feature-3.jpg" class="w-100" alt="Guava">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive w-100">
                                <div class="position-relative mb-4">
                                    <img src="images/product/feature-4.jpg" class="w-100" alt="Watermelon">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive  ">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/feature-5.jpg" class="w-100" alt="Diced Meat">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card  text-center interactive">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/feature-6.jpg" class="w-100" alt="Bananas">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive">
                                <div class="position-relative mb-4">
                                    <img src="images/product/feature-7.jpg" class="w-100" alt="Guava">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive w-100">
                                <div class="position-relative mb-4">
                                    <img src="images/product/feature-8.jpg" class="w-100" alt="Watermelon">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive  ">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/product-9.jpg" class="w-100" alt="Diced Meat">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card  text-center interactive">
                                <div class="position-relative mb-4 ">
                                    <img src="images/product/product-10.jpg" class="w-100" alt="Bananas">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive">
                                <div class="position-relative mb-4">
                                    <img src="images/product/product-11.jpg" class="w-100" alt="Guava">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-card text-center interactive w-100">
                                <div class="position-relative mb-4">
                                    <img src="images/product/product-12.jpg" class="w-100" alt="Watermelon">
                                    <div class="hover-icons">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                        <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                </div>
                                <p class="product-name">Crab Pool Security</p>
                                <p class="product-price">$30.00</p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ---------------------pagination----------------------------- -->
                <div class="mb-2 pb-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination gap-3">
                            <li class="page-item">
                                <a class="page-link para px-3 py-1 sub-text" href="#" aria-label="Previous">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link para px-3 py-1 sub-text" href="#">1</a></li>
                            <li class="page-item"><a class="page-link para px-3 py-1 sub-text" href="#">2</a></li>
                            <li class="page-item"><a class="page-link para px-3 py-1 sub-text" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link para px-3 py-1 sub-text" href="#" aria-label="Next">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
