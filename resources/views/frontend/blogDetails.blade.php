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
                    <div class="d-flex gap-3 mb-2">
                        <div class="image">
                            <img src="{{ asset('assets/images/blog/sr-1.jpg') }}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0 fw-bold">09 Kinds Of Vegetables </p>
                            <p class="mb-0 fw-bold"> Protect The Liver</p>
                            <p class="para mini-text">March 05, 2019</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-2">
                        <div class="image">
                            <img src="{{ asset('assets/images/blog/sr-2.jpg') }}" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="mb-0 fw-bold">Tips You To Balance </p>
                            <p class="mb-0 fw-bold"> Nutrition Meal Day</p>
                            <p class="para mini-text">March 05, 2019</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="image">
                            <img src="{{ asset('assets/images/blog/sr-3.jpg') }}" alt="">
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
                    <img src="{{ asset('assets/images/blogDetails/details-pic.jpg') }}" alt="" class="w-100">
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
                                <img src="{{ asset('assets/images/blogDetails/details-author.jpg') }}"
                                    class="rounded-circle" alt="author">
                                <div class="d-flex flex-column justify-content-center ">
                                    <p class="fw-bold mb-0">Michael Scofield</p>
                                    <p class="text-secondary mb-0">Admin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="mb-5">
                                <p class=""><span class="fw-bold">Categories:</span> <span
                                        class="sub-text">Food</span>
                                </p>
                                <p><span class="fw-bold">Tags:</span> <span class="sub-text">All, Trending, Cooking,
                                        Healthy Food, Life Style</span></p>

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
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" class="w-100 " alt="ban1">
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
            <div class="col-lg-4 col-md-6 col-sm-6 ">
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

            </div>
        </div>
    </div>
@endsection
