@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="wrapper">
            <!-- ------------------------hero section---------------------- -->
            <div class="row py-2 mb-5">
                <div class="col-lg-3 col-md-12 col-sm-12">
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="d-flex flex-column p-5 hero mt-4"
                        style="background-image: url('{{ asset($herosection?->thumbnail) }}'); background-size: cover; background-repeat: no-repeat; height: 50vh">
                        <p class="text fw-bold mt-4 mb-2 para">{{ $herosection?->header }}</p>
                        <h1 class="heading fw-bold">{{ $herosection?->first_title }}</h1>
                        <h1 class="heading fw-bold">{{ $herosection?->second_title }}</h1>
                        <p class="sub-text mb-4">{{ $herosection?->short_description }}</p>
                        <button class="btn-all text-white fw-bold py-2  color-bg mb-5">
                            {{ $herosection?->btn_name }}
                        </button>
                    </div>
                </div>
            </div>

            <!-- ----------carousel--------------------- -->

            <div class="swiper categorySwiper mb-3">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide text-center position-relative">
                            <img src="{{ asset($product?->thumbnail) }}" alt="{{ $product?->name }}" class="img-fluid mb-3">
                            <h6 class="fw-bold bg-white title">{{ $product?->name }}</h6>
                        </div>
                    @endforeach

                    {{-- <div class="swiper-slide text-center position-relative">
                        <img src="{{ asset('assets/images/carousel/cat-2.jpg') }}" alt="Meat" class="img-fluid mb-3">
                        <h6 class="fw-bold bg-white title">DRINK FRUITS</h6>
                    </div>

                    <div class="swiper-slide text-center position-relative">
                        <img src="{{ asset('assets/images/carousel/cat-3.jpg') }}" alt="Meat" class="img-fluid mb-3">
                        <h6 class="fw-bold bg-white title">DRINK FRUITS</h6>
                    </div>

                    <div class="swiper-slide text-center">
                        <img src="{{ asset('assets/images/carousel/cat-4.jpg') }}" alt="Fresh Fruit"
                            class="img-fluid mb-3">
                        <h6 class="fw-bold bg-white title">FRESH FRUIT</h6>
                    </div>
                    <div class="swiper-slide text-center">
                        <img src="{{ asset('assets/images/carousel/cat-5.jpg') }}" alt="Fresh Fruit"
                            class="img-fluid mb-3">
                        <h6 class="fw-bold bg-white title">FRESH FRUIT</h6>
                    </div> --}}
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
                            <img src="{{ asset('assets/images/product/feature-1.jpg') }}" alt="Diced Meat">
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
                            <img src="{{ asset('assets/images/product/feature-2.jpg') }}" alt="Bananas">
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
                            <img src="{{ asset('assets/images/product/feature-3.jpg') }}" alt="Guava">
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
                            <img src="{{ asset('assets/images/product/feature-4.jpg') }}" alt="Watermelon">
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
                            <img src="{{ asset('assets/images/product/feature-5.jpg') }}" alt="Diced Meat">
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
                            <img src="{{ asset('assets/images/product/feature-6.jpg') }}" alt="Bananas">
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
                            <img src="{{ asset('assets/images/product/feature-7.jpg') }}" alt="Guava">
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
                            <img src="{{ asset('assets/images/product/feature-8.jpg') }}" alt="Watermelon">
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
                    <img src="{{ asset('assets/images/banner/banner-1.jpg') }}" class="w-100" alt="ban1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/images/banner/banner-2.jpg') }}" class="w-100" alt="ban1">
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
                                   @foreach ($products->reverse()->take(3) as $product)


                                    <div class="prod-slider-item">
                                        <img src="{{ asset($product?->thumbnail) }}" alt="Latest 1">
                                        <div class="prod-details">
                                            <p>{{$product?->name}}</p>
                                            <p class="prod-price">{{$product?->price}}</p>
                                        </div>
                                    </div>

                                    @endforeach
                                    {{-- <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-2.jpg') }}" alt="Latest 2">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$30.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-3.jpg') }}" alt="Latest 3">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$30.00</p>
                                        </div>
                                    </div> --}}
                                </div>


                                {{-- <div class="prod-slider-column">
                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-1.jpg') }}" alt="Latest 1">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$30.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-2.jpg') }}" alt="Latest 2">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$30.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-3.jpg') }}" alt="Latest 3">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$30.00</p>
                                        </div>
                                    </div>
                                </div> --}}
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
                                    @foreach ($products -> take(3) as $product)
                                    <div class="prod-slider-item">
                                        <img src="{{ asset($product?->thumbnail) }}" alt="Review 1">
                                        <div class="prod-details">
                                            <p>{{$product?->name}}</p>
                                            <p class="prod-price">{{$product?->price}}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-2.jpg') }}" alt="Review 2">
                                        <div class="prod-details">
                                            <p>High Fiber Cereal Box</p>
                                            <p class="prod-price">$11.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-3.jpg') }}" alt="Review 3">
                                        <div class="prod-details">
                                            <p>Whole Milk Gallon</p>
                                            <p class="prod-price">$6.00</p>
                                        </div>
                                    </div> --}}
                                </div>

                                {{-- <div class="prod-slider-column">
                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-1.jpg') }}" alt="Review 1">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$15.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-2.jpg') }}" alt="Review 2">
                                        <div class="prod-details">
                                            <p>High Fiber Cereal Box</p>
                                            <p class="prod-price">$11.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-3.jpg') }}" alt="Review 3">
                                        <div class="prod-details">
                                            <p>Whole Milk Gallon</p>
                                            <p class="prod-price">$6.00</p>
                                        </div>
                                    </div>
                                </div> --}}
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
                                    @foreach ($products -> take(3) as $product)
                                    <div class="prod-slider-item">
                                        <img src="{{ asset($product?->thumbnail) }}" alt="Review 1">
                                        <div class="prod-details">
                                            <p>{{ $product?->name }}</p>
                                            <p class="prod-price">{{ $product?->price }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/feature-7.jpg') }}" alt="Review 2">
                                        <div class="prod-details">
                                            <p>High Fiber Cereal Box</p>
                                            <p class="prod-price">$11.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/product/product-12.jpg') }}" alt="Review 3">
                                        <div class="prod-details">
                                            <p>Whole Milk Gallon</p>
                                            <p class="prod-price">$6.00</p>
                                        </div>
                                    </div> --}}
                                </div>

                                {{-- <div class="prod-slider-column">
                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-1.jpg') }}" alt="Review 1">
                                        <div class="prod-details">
                                            <p>Crab Pool Security</p>
                                            <p class="prod-price">$15.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-2.jpg') }}" alt="Review 2">
                                        <div class="prod-details">
                                            <p>High Fiber Cereal Box</p>
                                            <p class="prod-price">$11.00</p>
                                        </div>
                                    </div>

                                    <div class="prod-slider-item">
                                        <img src="{{ asset('assets/images/latestP/lp-3.jpg') }}" alt="Review 3">
                                        <div class="prod-details">
                                            <p>Whole Milk Gallon</p>
                                            <p class="prod-price">$6.00</p>
                                        </div>
                                    </div>
                                </div> --}}
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
                @foreach ($blogs as $blog)
                    <div class="col-4">
                        <img src="{{ asset($blog?->first_thumbnail) }}" class="w-100" alt="ban1">
                        <ul class="list-unstyled d-flex gap-3 pt-4 ">
                            <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                            </li>
                            <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                            </li>
                        </ul>
                        <p class="fw-bold sub-heading">{{ $blog?->first_title }}</p>
                        {{-- <p class="sub-text">{!! $blog->description !!}</p> --}}

                        <p class="sub-text">
                            {!! \Illuminate\Support\Str::words($blog->description, 20, '...') !!}
                            {{-- <a href="{{ route('ogani.blogDetails', $blog->id) }}">See More</a> --}}
                        </p>

                    </div>
                @endforeach

                {{-- <div class="col-4">
                    <img src="{{ asset('assets/images/blog/blog-2.jpg') }}" class="w-100" alt="ban1">
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
                    <img src="{{ asset('assets/images/blog/blog-3.jpg') }}" class="w-100" alt="ban1">
                    <ul class="list-unstyled d-flex gap-3 pt-4 ">
                        <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                        </li>
                        <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                        </li>
                    </ul>
                    <p class="fw-bold sub-heading">Visit the clean farm in the US</p>
                    <p class="sub-text">Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                        quaerat</p>

                </div> --}}
            </div>
        </div>
    </div>
@endsection
