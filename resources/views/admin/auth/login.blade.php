<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="CSN Bangladesh">
    <meta name="robots" content="">
    <meta name="keywords" content=" developing">
    <meta name="description" content="CSN Bangladesh software developer company">
    <meta property="og:title" content="admin login">
    <meta property="og:description" content="project sale free and paid.">
    <meta property="og:image" content="{{ asset('assets/logo.png') }}">
    <meta name="format-detection" content="telephone=no">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{ asset('admin/assets/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">

</head>

<body>
    <div class="fix-warpper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="#">
                                    <img class="logo-auth" src="{{ asset('admin/assets/img/csnbangladesh_logo.jpeg') }}"
                                        alt="">
                                </a>
                            </div>
                            <h4 class="text-center mb-4">Sign in your account</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.login.submit') }}" method="POST">
                                @csrf
                                <div class="from-group mb-4">
                                    <label class="form-label" for="username" style="color:black ">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter your email address"
                                        id="username" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="position-relative">
                                    <label class="form-label" for="dlab-password" style="color: black  ">Password</label>
                                    <input type="password" id="dlab-password" class="form-control"
                                        placeholder="Enter your password" name="password" value="{{ old('password') }}">
                                    <span class="show-pass eye">
                                        <i class="fa-eye-slash"></i>
                                        <i class="fa fa-eye
                                        "></i>
                                    </span>

                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-row d-flex flex-wrap justify-content-between mb-2 mt-sm-4 mt-3">
                                    <div class="from-group mb-sm-4 mb-1">
                                        <div class="form-check custom-checkbox ms-1">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                            <label class="form-check-label" for="basic_checkbox_1">Remember my
                                                preference</label>

                                        </div>

                                    </div>
                                    <div class="form-group ms-2">
                                        <a class="text-hover" href="javascript:void(0)">Forgot Password</a>
                                    </div>


                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


</body>

</html>
