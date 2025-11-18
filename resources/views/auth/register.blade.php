@extends('frontend.layouts.app')
@section('content')
    <div class="container screen-cls d-flex flex-column justify-content-center align-items-center">

        <div class=" container card-shadow pt-5 pb-4 ms-5 ">
            <div class="text-center ">
                <h2 class="py-2  heading">Registration</h2>
                <p class="pb-2 ">Register To Your Account</p>
            </div>
            <div class=" d-flex flex-column justify-content-center align-items-center w-100">
                
                  <form action="{{route('register.store')}}" method="GET" class=" border-lgt w-50 p-4 " enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label ">Name</label>
                            <input type="name" placeholder="Write Your Name"
                                class="form-control bg-light border-light p-2" id="exampleInputName" name="name"
                                aria-describedby="nameHelp">
                                 @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Email address</label>
                            <input type="email" placeholder="Write Your Email Address"
                                class="form-control bg-light border-light p-2" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAddress" class="form-label "> Address</label>
                            <input type="text" placeholder="Write Your Address"
                                class="form-control bg-light border-light p-2" id="exampleInputAddress" name="address"
                                aria-describedby="addresslHelp">
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label "> Phone no</label>
                            <input type="number" placeholder="Write Your Phone Number"
                                class="form-control bg-light border-light p-2" id="exampleInputPhone" name="phone"
                                aria-describedby="PhoneHelp">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <label for="exampleInputPassword1" class="form-label ">Password</label>
                            <input type="password" placeholder="Write Your Password"
                                class="form-control bg-light border-light p-2" id="exampleInputPassword1" name="password">
                            <i class="fa-regular fa-eye-slash eye" id="togglePassword"></i>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                             <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                        <div class="text-center mt-4">
                            <p class="para">Already have an account? <a href="{{ route('login.create') }}"
                                    class=" text-decoration-none">Login</a></p>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
