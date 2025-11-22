@extends('frontend.layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Vegetable’s Package</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
            <a href="index.html" class=" text-decoration-none text-white fw-bold">- Pages</a>
            <span>- Shop Details</span>
        </div>
    </div>

    <div class="container my-5">

        <div class="container my-5">
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="">
                        <img src="{{ asset('assets/images/pages/product-details-1.jpg') }}" class="product-hero"
                            alt="bnr">
                        <div class="swiper categorySwiper mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center position-relative">
                                    <img src="{{ asset('assets/images/carousel/cat-1.jpg') }}" alt="Meat"
                                        class="img-fluid mb-3">
                                </div>

                                <div class="swiper-slide text-center position-relative">
                                    <img src="{{ asset('assets/images/carousel/cat-2.jpg') }}" alt="Meat"
                                        class="img-fluid mb-3">
                                </div>

                                <div class="swiper-slide text-center position-relative">
                                    <img src="{{ asset('assets/images/carousel/cat-3.jpg') }}" alt="Meat"
                                        class="img-fluid mb-3">
                                </div>

                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('assets/images/carousel/cat-4.jpg') }}" alt="Fresh Fruit"
                                        class="img-fluid mb-3">
                                </div>
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('assets/images/carousel/cat-5.jpg') }}" alt="Fresh Fruit"
                                        class="img-fluid mb-3">
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
                            @php
                                $avg = 0;
                                if ($product->review == 0) {
                                    $avg = 0;
                                } else {
                                    $avg = round($product->rating / $product->review);
                                }
                            @endphp

                            @for ($i = 1; $i <= $avg; $i++)
                                <i class="fa-solid fa-star text-warning"></i>
                            @endfor
                            @for ($i = $avg; $i < 5; $i++)
                                <i class="fa-regular fa-star text-warning"></i>
                            @endfor
                            <p class="para text-danger ">({{ $product->review }} reviews)</p>
                        </div>

                        {{-- <div class="rating-product">
                                        @for ($i = 1; $i <= $avg; $i++)
                                        <i class="fa fa-star"></i>
                                        @endfor
                                        @for ($i = $avg; $i <= 4; $i++)
                                        <i class="fa fa-star-o"></i>
                                        @endfor
                                        <span>{{$total_reviews}}</span>
                                    </div> --}}


                        <p class="fs-2 text-danger">$50.00</p>
                        <p class="para">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam
                            sit
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
                            <a href="#" class="px-3 py-2 bg-light text-secondary"><i
                                    class="fa-regular fa-heart"></i></a>
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
                            <img src="{{ asset('assets/images/product/feature-1.jpg') }}" class="w-100"
                                alt="Diced Meat">
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
                            <img src="{{ asset('assets/images/product/feature-2.jpg') }}" class="w-100" alt="Bananas">
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
                            <img src="{{ asset('assets/images/product/feature-3.jpg') }}" class="w-100" alt="Guava">
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
                            <img src="{{ asset('assets/images/product/feature-4.jpg') }}" class="w-100"
                                alt="Watermelon">
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


    </div>
@endsection
