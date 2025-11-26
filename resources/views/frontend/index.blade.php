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
                </div>
            </div>

            <!-- ------feature product------------------ -->
            <section class="featured-products-section">
                <div class="text-center py-4">
                    <h1 class="heading fw-bold">Featured Product</h1>
                    <div class="underline"></div>
                </div>

                <nav class="d-flex justify-content-center gap-5 mb-5">
                    <button class="tab-btn active" data-filter="all">All</button>
                    @foreach ($categories as $category)
                        <button class="tab-btn" data-filter="{{ $category }}">
                            {{ $category?->name }}
                        </button>
                    @endforeach
                </nav>

                <div class="product-grid mb-5 gap-4">
                    @foreach ($products as $product)
                        <div class="product-card text-center interactive" data-category="{{ $product->category }}">
                            <div class="position-relative mb-4">
                                <a href="{{ route('shopDetails', $product->id) }}">
                                    <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}" class="w-100">
                                </a>
                                <div class="hover-icons">
                                    <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                    <button class="icon-btn"><i class="fas fa-sync-alt"></i></button>
                                    <button class="icon-btn"><i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">${{ $product->price }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- ------------------------card section------------------- -->
            <div class="row my-5 pb-5">
                @foreach ($cards as $card)
                    <div class="col-6">
                        <div class="d-flex flex-column p-5 hero mt-4 justify-content-center"
                            style="background-image: url('{{ $card?->thumbnail }}'); background-size: cover; background-repeat: no-repeat; height: 50vh">
                            <p class=" fw-bold mt-4 mb-2 para">{{ $card?->category->name }}</p>
                            <p class="para text-muted fw-bold">{{ $card?->offer }}</p>
                            <button class="btn-all text-white fw-bold py-2  color-bg mb-5">
                                {{ $card?->btn_name }}
                            </button>
                        </div>
                    </div>
                @endforeach
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
                                                <p>{{ $product?->name }}</p>
                                                <p class="prod-price">{{ $product?->price }}</p>
                                            </div>
                                        </div>
                                    @endforeach
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
                                    @foreach ($topRatedProducts as $product)
                                        <div class="prod-slider-item">
                                            <img src="{{ asset($product?->thumbnail) }}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>{{ $product?->name }}</p>
                                                <p class="prod-price">{{ $product?->price }}</p>
                                            </div>
                                        </div>
                                    @endforeach
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
                                    @foreach ($products->take(3) as $product)
                                        <div class="prod-slider-item">
                                            <img src="{{ asset($product?->thumbnail) }}" alt="Review 1">
                                            <div class="prod-details">
                                                <p>{{ $product?->name }}</p>
                                                <p class="prod-price">{{ $product?->price }}</p>
                                            </div>
                                        </div>
                                    @endforeach
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
                @foreach ($blogs ?? [] as $item)
                    <div class="col-4">
                        <div>
                            <a href="{{ route('blogDetails', $item->id) }}" class="text-decoration-none">
                                <img src="{{ asset($item?->first_thumbnail) }}" class="w-100" alt="ban1">
                            </a>
                        </div>

                        <ul class="list-unstyled d-flex gap-3 pt-4">
                            <li class="sub-text"><i class="fa-regular fa-calendar"></i>
                                {{ $item?->created_at->format('M d, Y') }}</li>
                            <li class="sub-text"><i class="fa-regular fa-comment"></i>5</li>
                        </ul>

                        <p class="fw-bold sub-heading">{{ $item?->first_title }}</p>

                        <p class="sub-text">
                            {!! \Illuminate\Support\Str::words($item?->description ?? '', 20, '...') !!}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
