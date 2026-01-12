<div class="container">
    <div class="wrapper">
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
                                <a class="nav-link para text-dark fw-bold {{ request()->routeIs('home') ? 'active' : '' }}"
                                    aria-current="page" href="{{ route('home') }}">
                                    HOME
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link para text-dark fw-bold {{ request()->routeIs('shop') ? 'active' : '' }}"
                                    href="{{ route('shop') }}">
                                    SHOP
                                </a>
                            </li>

                            @php
                                $productId = 1;
                                $blogId = 1;
                            @endphp
                            <li class="menu position-relative">
                                <a class="menu-btn nav-link para text-dark fw-bold {{ request()->routeIs('shopDetails', 'shoppingCart', 'checkOut', 'blogDetails') ? 'active' : '' }}"
                                    href="#">
                                    PAGES
                                </a>
                                <ul class="dropdown-list bg-dark py-2 px-3">
                                    <li>
                                        <a class="nav-link text-decoration-none text-white para {{ request()->routeIs('shopDetails') ? 'active' : '' }}"
                                            href="{{ route('shopDetails', $productId) }}">
                                            Shop Details
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-decoration-none text-white para {{ request()->routeIs('shoppingCart') ? 'active' : '' }}"
                                            href="{{ route('shoppingCart') }}">
                                            Shopping Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-decoration-none text-white para {{ request()->routeIs('checkOut') ? 'active' : '' }}"
                                            href="{{ route('checkOut') }}">
                                            Check Out
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-decoration-none text-white para {{ request()->routeIs('blogDetails') ? 'active' : '' }}"
                                            href="{{ route('blogDetails', $blogId) }}">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link para text-dark fw-bold {{ request()->routeIs('blog') ? 'active' : '' }}"
                                    href="{{ route('blog') }}">
                                    BLOG
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link para text-dark fw-bold {{ request()->routeIs('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">
                                    CONTACT
                                </a>
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
    </div>
</div>
