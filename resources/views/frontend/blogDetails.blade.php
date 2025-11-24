@extends('frontend.layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center mb-4">The Moment You Need To Remove Garlic From The Menu</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white text-center">By Michael Scofield<span
                    class="px-3">|</span>January 14, 2019<span class="px-3">|</span> 8 Comments</a>
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
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Beauty
                                (20)</a>
                        </li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Food (5)</a>
                        </li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Life Style
                                (9)</a>
                        </li>
                        <li class="pb-4 "><a href="#" class="sub-text category text-decoration-none">Travel
                                (10)</a>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <h3 class="fw-bold my-4 ">Recent News</h3>
                    @foreach ($latestBlogs as $singleBlog)
                        <div class="row">
                            <div class=" col-12 d-flex gap-3 mb-2">
                                <div class="image">
                                    <img src="{{ $singleBlog?->firstThumbnail }}" alt="img"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="mb-0 fw-bold">{{ $singleBlog?->first_title }} </p>
                                    {{-- <p class="mb-0 fw-bold"> Protect The Liver</p> --}}
                                    <p class="para mini-text">
                                        <i class="fa-regular fa-calendar"></i>
                                        {{ $singleBlog?->created_at?->format('M d, Y') ?? 'N/A' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
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

            {{-- right side --}}
            <div class="col-lg-8 col-md-7 order-md-1 order-1">
                <div class="">
                    <img src="{{ $blog?->first_thumbnail }}" alt="blogImg" class="w-100" style="object-fit: cover">
                    <p class="text-secondary py-4">
                        {!! $blog?->description !!}
                    </p>
                    <h3 class="fw-bold pb-4">
                        {{ $blog?->second_title }}
                    </h3>
                    <p class="text-secondary">
                        {{ $blog?->short_description }}
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="d-flex gap-3 mb-5">
                                <img src="{{ asset($blog?->secondThumbnail) }}" class="rounded-circle rounded-circle"
                                    alt="author" style="width: 80px; height:80px">
                                <div class="d-flex flex-column justify-content-center ">
                                    <p class="fw-bold mb-0">{{ $blog?->name }}</p>
                                    <p class="text-secondary mb-0">{{ $blog?->designation }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-5">
                                <p class=""><span class="fw-bold">Categories:</span> <span
                                        class="sub-text">{{ $blog?->category }}</span>
                                </p>
                                <p><span class="fw-bold">Tags:</span> <span class="sub-text">{{ $blog?->tags }}</span></p>

                                <div class="d-flex text-muted gap-3">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-whatsapp"></i>
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
            @foreach ($latestBlogs ?? [] as $likeBlog)
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <!-- Anchor tag wrapping the image -->
                    <a href="{{ route('ogani.blogDetails', $likeBlog->id) }}" class="text-decoration-none">
                        <img src="{{ asset($likeBlog?->first_thumbnail ?? 'placeholder.png') }}" class="w-100"
                            alt="{{ $likeBlog?->first_title ?? 'Blog image' }}">
                    </a>

                    <ul class="list-unstyled d-flex gap-3 pt-4">
                        <li class="sub-text">
                            <i class="fa-regular fa-calendar"></i>
                            {{ $likeBlog?->created_at?->format('M d, Y') ?? 'N/A' }}
                        </li>
                        <li class="sub-text"><i class="fa-regular fa-comment"></i>5</li>
                    </ul>

                    <p class="fw-bold sub-heading">{{ $likeBlog?->first_title ?? 'No title' }}</p>

                    {{-- <p class="sub-text">{!! $likeBlog?->description ?? '' !!}</p> --}}
                    <p class="sub-text">
                            {!! \Illuminate\Support\Str::words($likeBlog?->description ?? '', 25, '...') !!}

                </div>
            @endforeach

        </div>
    </div>
@endsection
