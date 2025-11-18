@php
    $user = auth()->user();
@endphp
<nav class="navbar navbar-cls bg-light hide">
    <div class="container d-flex justify-content-between">
        <div class="d-flex gap-2">
            <div class="border-end d-flex px-3 align-items-center gap-1 ">
                <i class="fa-solid fa-envelope para"></i>
                <p class="para text-center mb-0 ">hello@colorlib.com</p>
            </div>
            <p class="para mb-0 text-center px-3">Free Shipping for all Order of $99</p>
        </div>

        <div class="d-flex gap-3">
            <div class="d-flex border-end gap-3 px-3 align-items-center para">
                <i class="fa-brands fa-facebook-f "></i>
                <i class="fa-brands fa-twitter "></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-pinterest-p "></i>
            </div>
            <div class="d-flex border-end px-3 align-items-center">
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


            <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="accountDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">

                    @if ($user)
                            {{ $user->name }}
                    @else
                        <i class="fa-solid fa-user "></i>
                    @endif
                </button>
                
                <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                    <li><a class="dropdown-item" href="{{ route('login.create') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register.create') }}">Registration</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>

