 <div class="container">
     <div class="wrapper">
         @php
             $productId = 1;
             $offcanvasMenu = [
                 ['label' => 'Home', 'route' => 'home'],
                 ['label' => 'Shop', 'route' => 'ogani.shop'],
                 [
                     'label' => 'Pages',
                     'route' => null,
                     'children' => [
                         ['label' => 'Shop Details', 'route' => 'ogani.shopDetails', 'params' => [$productId]],
                         ['label' => 'Shopping Cart', 'route' => 'ogani.shoppingCart'],
                         ['label' => 'Check Out', 'route' => 'ogani.checkOut'],
                         ['label' => 'Blog Details', 'route' => 'ogani.blogDetails'],
                     ],
                 ],
                 ['label' => 'Blog', 'route' => 'ogani.blog'],
                 ['label' => 'Contact', 'route' => 'ogani.contact'],
             ];
         @endphp

         <a class="btn border-dark" id="barToggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
             aria-controls="offcanvasExample">
             <i class="fa-solid fa-bars"></i>
         </a>

         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
             aria-labelledby="offcanvasExampleLabel">
             <div class="offcanvas-header">
                 <div class="offcanvas-title" id="offcanvasExampleLabel">
                     <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                 </div>
                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>

             <div class="offcanvas-body">
                 {{-- Cart and Wishlist --}}
                 <div class="d-flex gap-4 align-items-center position-relative mb-3">
                     <i class="fa-solid fa-heart"></i>
                     <i class="fa-solid fa-briefcase"></i>
                     <span class="heart">1</span>
                     <span class="briefcase">3</span>
                     <p class="para pt-3 ps-1">item: <span class="fw-bold text-dark">$150.00</span></p>
                 </div>

                 {{-- Language and Login --}}
                 <div class="d-flex gap-3 mb-3">
                     <div class="d-flex border-end align-items-center">
                         <img src="{{ asset('assets/images/language.png') }}" alt="flag" />
                         <div class="dropdown">
                             <button class="btn para dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                 English
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item para" href="#">Spanish</a></li>
                                 <li><a class="dropdown-item para" href="#">English</a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="d-flex gap-2 align-items-center para">
                         <i class="fa-solid fa-user"></i>
                         <p class="mb-0 text-center para">Login</p>
                     </div>
                 </div>

                 {{-- Dynamic Menu --}}
                 <div class="dropdown mt-3 res-side d-flex justify-content-end">
                     <button class="btn btn-dark fw-bold my-2" type="button" data-bs-toggle="dropdown">
                         MENU <i class="fa-solid fa-bars ps-2"></i>
                     </button>

                     <ul class="dropdown-menu res-side border-0 w-100 mt-0 ps-4">
                         @foreach ($offcanvasMenu as $item)
                             @if (empty($item['children']))
                                 <li>
                                     <a class="dropdown-item drop-item text-white {{ request()->routeIs($item['route']) ? 'active' : '' }}"
                                         href="{{ $item['route'] ? route($item['route'], $item['params'] ?? []) : '#' }}">
                                         {{ $item['label'] }}
                                     </a>
                                 </li>
                             @else
                                 <li class="drop-item dropdown-submenu">
                                     <a class="dropdown-item drop-item text-white" href="#">
                                         {{ $item['label'] }} ►
                                     </a>
                                     {{-- <ul class="submenu">
                                         @foreach ($item['children'] as $child)
                                             <li>
                                                 <a class="dropdown-item drop-item text-white {{ request()->routeIs($child['route']) ? 'active' : '' }}"
                                                     href="{{ route($child['route'], $child['params'] ?? []) }}">
                                                     {{ $child['label'] }}
                                                 </a>
                                             </li>
                                         @endforeach
                                     </ul> --}}
                                 </li>
                             @endif
                         @endforeach
                     </ul>
                 </div>

                 {{-- Social Icons --}}
                 <div class="d-flex border-end mt-2 gap-3 align-items-center para">
                     <i class="fa-brands fa-facebook-f"></i>
                     <i class="fa-brands fa-twitter"></i>
                     <i class="fa-brands fa-linkedin-in"></i>
                     <i class="fa-brands fa-pinterest-p"></i>
                 </div>

                 {{-- Contact Info --}}
                 <div class="d-flex flex-column mt-4">
                     <div class="d-flex align-items-center gap-1 mt-2">
                         <i class="fa-solid fa-envelope para"></i>
                         <p class="para mb-0">hello@colorlib.com</p>
                     </div>
                     <p class="para mt-2">Free Shipping for all Ord

                 </div>
             </div>
         </div>


         @php
             $departments = [
                 'Fresh Meat',
                 'Vegetables',
                 'Fruit & Nut Gifts',
                 'Fresh Berries',
                 'Ocean Foods',
                 'Butter & Eggs',
                 'Fastfood',
                 'Fresh Onion',
                 'Papayaya & Crisps',
                 'Oatmeal',
                 'Fresh Bananas',
             ];

             $searchCategories = $departments;
         @endphp

         <div class="row py-2 mb-5">
             {{-- All Departments Dropdown --}}
             <div class="col-lg-3 col-md-12 col-sm-12">
                 <div class="dropdown py- d-flex position-relative mb-4">
                     <button
                         class="color-bg text-white fw-bold w-100 allDept d-flex justify-content-start align-items-center"
                         type="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fa-solid fa-bars pe-4"></i>All departments
                         <i class="fa-solid fa-angle-down angle"></i>
                     </button>

                     <ul class="dropdown-menu w-100">
                         @foreach ($departments as $department)
                             <li><a class="dropdown-item para" href="#">{{ $department }}</a></li>
                         @endforeach
                     </ul>
                 </div>
             </div>

             {{-- Search Bar & Contact --}}
             <div class="col-lg-9 col-md-12 col-sm-12">
                 <div class="row">

                     <div class="col-lg-8 col-md-8 col-sm-12">
                         <div class="d-flex justify-content-center border-lgt mb-4 overflow-hidden bg-white">
                             <div class="d-flex align-items-center">
                                 <p class="dropdown border-end px-3 mb-0 dropdown-toggle fw-bold sm-hide"
                                     data-bs-toggle="dropdown">
                                     All Categories
                                 </p>
                                 <ul class="dropdown-menu">
                                     @foreach ($searchCategories as $category)
                                         <li><a class="dropdown-item para" href="#">{{ $category }}</a></li>
                                     @endforeach
                                 </ul>
                             </div>

                             <input type="text" class="form-control border-0 flex-grow-1 shadow-none px-3"
                                 placeholder="What do you need?" />
                             <button class="text-white fw-bold allDept px-2 color-bg">SEARCH</button>
                         </div>
                     </div>

                     {{-- Contact Info --}}
                     <div class="col-lg-4 col-md-4 col-sm-12">
                         <div class="d-flex justify-content-center justify-content-sm-start gap-2">
                             <div class="phone">
                                 <i class="fa-solid fa-phone"></i>
                             </div>
                             <div class="d-flex flex-column justify-content-center align-items-center">
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
