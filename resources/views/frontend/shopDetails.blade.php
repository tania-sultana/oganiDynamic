@extends('frontend.layouts.app')
@section('contact')
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
                                        <li><a class="nav-link active text-decoration-none text-white para"
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
<div class="d-flex flex-column p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Vegetable’s Package</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
            <a href="index.html" class=" text-decoration-none text-white fw-bold">- Pages</a>
            <span>- Shop Details</span>
        </div>
    </div>
    <!-- --------------------left side------------------------- -->
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="">
                    <img src="images/pages/product-details-1.jpg" class="product-hero" alt="bnr">
                    <div class="swiper categorySwiper mb-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center position-relative">
                                <img src="images/carousel/cat-1.jpg" alt="Meat" class="img-fluid mb-3">
                            </div>

                            <div class="swiper-slide text-center position-relative">
                                <img src="images/carousel/cat-2.jpg" alt="Meat" class="img-fluid mb-3">
                            </div>

                            <div class="swiper-slide text-center position-relative">
                                <img src="images/carousel/cat-3.jpg" alt="Meat" class="img-fluid mb-3">
                            </div>

                            <div class="swiper-slide text-center">
                                <img src="images/carousel/cat-4.jpg" alt="Fresh Fruit" class="img-fluid mb-3">
                            </div>
                            <div class="swiper-slide text-center">
                                <img src="images/carousel/cat-5.jpg" alt="Fresh Fruit" class="img-fluid mb-3">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- --------------------------right side---------------------- -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div>
                    <h3 class="pb-2">Vegetable’s Package</h3>
                    <div class="d-flex">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star-half-stroke text-warning"></i>
                        <p class="para text-danger ">(18 reviews)</p>
                    </div>
                    <p class="fs-2 text-danger">$50.00</p>
                    <p class="para">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit
                        amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit
                        amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                    <div class="quantity d-flex flex-wrap align-items-center gap-3 pb-5 border-bottom">
                        <div class="bg-light py-2 px-4 d-flex align-items-center gap-4 ">
                            <span class="text-secondary dec-qty">-</span>
                            <span class="text-secondary qty">1</span>
                            <span class="text-secondary inc-qty">+</span>
                        </div>
                        <button class="btn cart-btn text-white para fw-bold p-2 color-bg ">
                            ADD TO CART
                        </button>
                        <a href="#" class="px-3 py-2 bg-light text-secondary"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <div class="mt-5">
                        <div class="d-flex gap-5">
                            <p class="left-text fw-bold">Availability </p>
                            <p class=""> In Stock</p>
                        </div>
                        <div class="d-flex gap-5 ">
                            <p class="left-text fw-bold">Shipping </p>
                            <p class=""> 01 day shipping. <span class="text-danger">Free pickup today</span></p>
                        </div>
                        <div class="d-flex gap-5">
                            <p class="left-text fw-bold">Weight </p>
                            <p class=""> 0.5 kg</p>
                        </div>
                        <div class="d-flex gap-5">
                            <p class="left-text fw-bold">Share on </p>
                            <div class="d-flex gap-4">
                                <i class="fa-brands fa-facebook-f "></i>
                                <i class="fa-brands fa-twitter "></i>
                                <i class="fa-brands fa-instagram "></i>
                                <i class="fa-brands fa-pinterest "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- --------------description, Information & Reviews section-------------- -->
        <div class="tabs d-flex justify-content-center align-items-center position-relative gap-5 ">
            <div class="tab fw-bold active" data-tab="description">Description</div>
            <div class="tab fw-bold" data-tab="information">Information</div>
            <div class="tab fw-bold" data-tab="reviews">Reviews (1)</div>
        </div>
        <div class="my-4 pb-4">
            <div class="tab-content active" id="description">
                <p class="fw-bold">Products Information</p>
                <p class="text-secondary">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget
                    felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                    Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                    pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                    dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                    velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.

                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras
                    ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor
                    lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit
                    amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit
                    amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
            </div>

            <div class="tab-content" id="information">
                <p class="fw-bold">Products Information</p>
                <p class="text-secondary">
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci
                    porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat.
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget
                    malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id
                    imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non
                    nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum
                    primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                    aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.

                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras
                    ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor
                    lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </p>
            </div>


            <div class="tab-content " id="reviews">
                <p class="fw-bold">Products Information</p>
                <p class="text-secondary">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                    Pellentesque
                    in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis
                    porttitor
                    volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue
                    leo
                    eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan
                    id
                    imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non
                    nisi.
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis
                    in
                    faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                    vel,
                    ullamcorper sit amet ligula. Proin eget tortor risus.
                </p>
            </div>
        </div>
        <!-- -------------Related Product--------------------- -->
        <div class="text-center mb-4 py-4 ">
            <h1 class="heading fw-bold">Related Product</h1>
            <div class="underline"></div>
        </div>
        <div class="row ">
            <div class="col-lg-3 col-md-4 col-sm-6">
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

            <div class="col-lg-3 col-md-4 col-sm-6">
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

            <div class="col-lg-3 col-md-4 col-sm-6">
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

            <div class="col-lg-3 col-md-4 col-sm-6">
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
        </div>
    </div>

@endsection
