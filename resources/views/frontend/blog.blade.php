@extends('frontend.layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Blog</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home</a>
            <span>- Blog</span>
        </div>
    </div>
    <!-- --------------------left side------------------------- -->
    <div class="container my-5">
        <div class="row">

            <div class="col-lg-4 col-md-5 col-sm-12 ">
                <div class="position-relative">
                    <input type="text" class="form-control shadow-none ps-3 pe-5 py-2 border-lgt input"
                        placeholder="Search" />
                    <i class="fa-solid fa-magnifying-glass search "></i>
                </div>

                <div>
                    <h2 class="fw-bold mt-5 mb-4">Categories</h2>
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
                    <h4 class="fw-bold my-4">Recent News</h4>
                    {{-- @foreach ($blogs->take(3) as $blog) --}}
                    @foreach ($blogs->reverse()->take(3) as $blog)

                    <div class="row">
                        <div class=" col-12 d-flex gap-3 mb-2">
                            <div class="image">
                                <img src="{{ asset($blog?->first_thumbnail) }}" alt="img" style="width: 100px; height: 100px">
                            </div>
                            <div class="d-flex flex-column">
                                <p class="mb-0 fw-bold">{{ $blog?->first_title }} </p>
                                {{-- <p class="mb-0 fw-bold"> Protect The Liver</p> --}}
                                <p class="para mini-text">March 05, 2019</p>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    {{-- <div class="d-flex gap-3 mb-2">
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
                    </div> --}}
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

            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="row mb-4 border-bottom">
                    @foreach ($blogs ?? []  as $blog)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 mb-3">
                            <img src="{{ asset($blog?->first_thumbnail) }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">{{$blog?->first_title}}</p>
                            <p class="sub-text pb-4">{!! $blog?->description !!}</p>
                            <a href="{{route('ogani.blogDetails', $blog->id)}}" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    {{-- </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 mb-3">
                            <img src="{{ asset('assets/images/blog/blog-3.jpg') }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">Visit the clean farm in the US</p>
                            <p class="sub-text pb-4">Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat</p>
                            <a href="#" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 mb-3">
                            <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">Cooking tips make cooking simple</p>
                            <p class="sub-text pb-4">Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat</p>
                            <a href="#" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 mb-3">
                            <img src="{{ asset('assets/images/blog/blog-4.jpg') }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">6 ways to prepare breakfast for 30</p>
                            <p class="sub-text pb-4">Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat</p>
                            <a href="#" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 ">
                            <img src="{{ asset('assets/images/blog/blog-4.jpg') }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">The Moment You Need To Remove Garlic From The Menu</p>
                            <p class="sub-text pb-4">Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat</p>
                            <a href="#" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="pb-5 ">
                            <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" class="w-100" alt="ban1">
                            <ul class="list-unstyled d-flex gap-3 pt-4 ">
                                <li class="sub-text"><i class="fa-regular fa-calendar "></i> May 4,2019
                                </li>
                                <li class="sub-text"><i class="fa-regular fa-comment"></i>5
                                </li>
                            </ul>
                            <p class="fw-bold sub-heading">Cooking tips make cooking simple</p>
                            <p class="sub-text pb-4">Sed quia non numquam modi tempora indunt ut labore et dolore magnam
                                aliquam quaerat</p>
                            <a href="#" class="text-decoration-none text-dark border px-3 py-2  input">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div> --}}
                    @endforeach
                </div>
                <!-- ---------------------blog----------------------------- -->
                <div class="mb-3 pb-5 pt-3">
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
