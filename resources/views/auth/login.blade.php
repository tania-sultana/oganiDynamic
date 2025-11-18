@extends('frontend.layouts.app')
@section('content')
    <div class="container screen-cls d-flex flex-column justify-content-center align-items-center">

        <div class=" container card-shadow pt-5 pb-4  ms-5 ">
            <div class="text-center ">
                <h2 class="py-2  heading">Login</h2>
                <p class="pb-2 fw-semibold">Login To Your Account</p>
            </div>
            <div class=" d-flex flex-column justify-content-center align-items-center w-100">

                @if (session('success'))
                    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('user.login') }}" method="POST" class=" border-lgt w-50 p-4 "
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label ">Email address</label>
                        <input type="email" placeholder="Write Your Email Address"
                            class="form-control bg-light border-light py-2" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3 position-relative ">
                        <label for="exampleInputPassword1" class="form-label ">Password</label>
                        <input type="password" placeholder="Write Your Password"
                            class="form-control bg-light border-light py-2" id="exampleInputPassword1" name="password">
                        <i class="fa-regular fa-eye-slash eye" id="togglePassword"></i>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="mb-3 form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label sub-para" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="#" class="text-decoration-none sub-para py-2 mb-3">Forgot
                            Password</a>
                    </div>
                    <div class="d-flex gap-3 justify-content-center ">
                        {{-- <a class=" text-decoration-none text-center py-2 w-100 log-btn border-every"
                            href="#">Login</a>
                             --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="text-center mt-4">
                        <p class="para">Don't have an account? <a
                                href="{{ route('register.create') }}"class=" text-decoration-none">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
