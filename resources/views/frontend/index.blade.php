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
                                    <a class="nav-link active para text-dark fw-bold" aria-current="page"
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
                                    <a class="nav-link para text-dark fw-bold"
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
    <div class="container">
        <div class="wrapper">
            <!-- ------------------------hero section---------------------- -->
            <div class="row py-2 mb-5">
                <div class="col-lg-3 col-md-12 col-sm-12">
                     </div>
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <div class="d-flex flex-column p-5 hero mt-4" style="background-image: url('{{ asset('assets/images/banner1.jpg') }}'); background-size: cover; background-repeat: no-repeat; height: 50vh" >
                                <p class="text fw-bold mt-4 mb-2 para">FRUIT FRESH</p>
                                <h1 class="heading fw-bold">Vegetable</h1>
                                <h1 class="heading fw-bold">100% Organic</h1>
                                <p class="sub-text mb-4">Free Pickup and Delivery Available</p>
                                <button class="btn-all text-white fw-bold py-2  color-bg mb-5">
                                    SHOP NOW
                                </button>
                            </div>
                        </div>
                </div>

                <!-- ----------carousel--------------------- -->

                <div class="swiper categorySwiper mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center position-relative">
                            <img src="{{asset('assets/images/carousel/cat-1.jpg')}}" alt="Meat" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">DRINK FRUITS</h6>
                        </div>

                        <div class="swiper-slide text-center position-relative">
                            <img src="{{asset('assets/images/carousel/cat-2.jpg')}}" alt="Meat" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">DRINK FRUITS</h6>
                        </div>

                        <div class="swiper-slide text-center position-relative">
                            <img src="{{asset('assets/images/carousel/cat-3.jpg')}}" alt="Meat" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">DRINK FRUITS</h6>
                        </div>

                        <div class="swiper-slide text-center">
                            <img src="{{asset('assets/images/carousel/cat-4.jpg')}}" alt="Fresh Fruit" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">FRESH FRUIT</h6>
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="{{asset('assets/images/carousel/cat-5.jpg')}}" alt="Fresh Fruit" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">FRESH FRUIT</h6>
                        </div>
                    </div>
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
                </div>

                <!-- ------feature product------------------ -->
                <section class="featured-products-section">
                    <div class="text-center py-4">
                        <h1 class="heading fw-bold">Featured Product</h1>
                        <div class="underline"></div>
                    </div>
                    <nav class="d-flex justify-content-center gap-5 mb-5">
                        <button class="tab-btn active" data-filter="all">All</button>
                        <button class="tab-btn" data-filter="oranges">Oranges</button>
                        <button class="tab-btn" data-filter="meat">Fresh Meat</button>
                        <button class="tab-btn" data-filter="vegetables">Vegetables</button>
                        <button class="tab-btn" data-filter="fastfood">Fastfood</button>
                    </nav>
                    <div class="product-grid mb-5 gap-4">
                        <div class="product-card text-center  interactive" data-category="meat">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-1.jpg')}}" alt="Diced Meat">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="oranges">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-2.jpg')}}" alt="Bananas">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="vegetables">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-3.jpg')}}" alt="Guava">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="fastfood, oranges">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-4.jpg')}}" alt="Watermelon">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>
                        <div class="product-card text-center  interactive" data-category="meat">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-5.jpg')}}" alt="Diced Meat">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="oranges">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-6.jpg')}}" alt="Bananas">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="vegetables">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-7.jpg')}}" alt="Guava">
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">Crab Pool Security</p>
                            <p class="product-price">$30.00</p>
                        </div>

                        <div class="product-card text-center interactive" data-category="fastfood">
                            <div class="position-relative mb-4">
                                <img src="{{asset('assets/images/product/feature-8.jpg')}}" alt="Watermelon">
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
                </section>
                <!-- ------------------------card section------------------- -->
                <div class="row my-5 pb-5">
                    <div class="col-6">
                        <img src="{{asset('assets/images/banner/banner-1.jpg')}}" class="w-100" alt="ban1">
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/banner/banner-2.jpg')}}" class="w-100" alt="ban1">
                    </div>
                </div>
                <!-- --------------second carousel section----------------------------- -->
                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="" prod-slider-container id="latest-products-container">
                            <div class="prod-slider-header">
                                <h5>Latest Products</h5>
                                <div class="prod-slider-controls">
                                    <button class="prod-prev-btn" aria-label="Previous Products"><i
                                            class="fas fa-chevron-left"></i></button>
                                    <button class="prod-next-btn" aria-label="Next Products"><i
                                            class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="prod-slider-wrapper">
                                <div class="prod-slider-track">

                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-1.jpg')}}" alt="Latest 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$30.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-2.jpg')}}" alt="Latest 2">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$30.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-3.jpg')}}" alt="Latest 3">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$30.00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-1.jpg')}}" alt="Latest 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$30.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-2.jpg')}}" alt="Latest 2">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$30.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-3.jpg')}}" alt="Latest 3">
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


                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="prod-slider-container" id="top-rated-products-container">
                            <div class="prod-slider-header">
                                <h5>Top Rated Products</h5>
                                <div class="prod-slider-controls">
                                    <button class="prod-prev-btn" aria-label="Previous Products"><i
                                            class="fas fa-chevron-left"></i></button>
                                    <button class="prod-next-btn" aria-label="Next Products"><i
                                            class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="prod-slider-wrapper">
                                <div class="prod-slider-track">

                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-1.jpg')}}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$15.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-2.jpg')}}" alt="Review 2">
                                            <div class="prod-details">
                                                <p>High Fiber Cereal Box</p>
                                                <p class="prod-price">$11.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-3.jpg')}}" alt="Review 3">
                                            <div class="prod-details">
                                                <p>Whole Milk Gallon</p>
                                                <p class="prod-price">$6.00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-1.jpg')}}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$15.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-2.jpg')}}" alt="Review 2">
                                            <div class="prod-details">
                                                <p>High Fiber Cereal Box</p>
                                                <p class="prod-price">$11.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-3.jpg')}}" alt="Review 3">
                                            <div class="prod-details">
                                                <p>Whole Milk Gallon</p>
                                                <p class="prod-price">$6.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="prod-slider-container" id="review-products-container">
                            <div class="prod-slider-header">
                                <h5>Review Products</h5>
                                <div class="prod-slider-controls">
                                    <button class="prod-prev-btn" aria-label="Previous Products"><i
                                            class="fas fa-chevron-left"></i></button>
                                    <button class="prod-next-btn" aria-label="Next Products"><i
                                            class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="prod-slider-wrapper">
                                <div class="prod-slider-track">


                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-5.jpg')}}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$15.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/feature-7.jpg')}}" alt="Review 2">
                                            <div class="prod-details">
                                                <p>High Fiber Cereal Box</p>
                                                <p class="prod-price">$11.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/product/product-12.jpg')}}" alt="Review 3">
                                            <div class="prod-details">
                                                <p>Whole Milk Gallon</p>
                                                <p class="prod-price">$6.00</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="prod-slider-column">
                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-1.jpg')}}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>Crab Pool Security</p>
                                                <p class="prod-price">$15.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-2.jpg')}}" alt="Review 2">
                                            <div class="prod-details">
                                                <p>High Fiber Cereal Box</p>
                                                <p class="prod-price">$11.00</p>
                                            </div>
                                        </div>

                                        <div class="prod-slider-item">
                                            <img src="{{asset('assets/images/latestP/lp-3.jpg')}}" alt="Review 3">
                                            <div class="prod-details">
                                                <p>Whole Milk Gallon</p>
                                                <p class="prod-price">$6.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ------------------------------blog section-------------------- -->
                <div class="text-center py-4 mb-4">
                    <h1 class="heading fw-bold">From The Blog</h1>
                    <div class="underline mb-2"></div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{asset('assets/images/blog/blog-1.jpg')}}" class="w-100" alt="ban1">
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
                    <div class="col-4">
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
                    <div class="col-4">
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
        </div>
    @endsection
