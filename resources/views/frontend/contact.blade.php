@extends('frontend.layouts.app')
@section('content')

    <div class="d-flex flex-column justify-content-center align-items-center p-5 contact mt-4 ">
        <h1 class="heading fw-bold text-white text-center">Contact Us</h1>
        <div class="d-flex justify-content-center text-white gap-2">
            <a href="index.html" class=" text-decoration-none text-white fw-bold">Home </a>
            <span>- Contact Us</span>
        </div>
    </div>

    <!-- -------------------map----------------------- -->
    <div class="container">
        <div class="row my-5 ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-solid fa-phone text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Phone </p>
                    <p class=" sub-text">{{ $contact?->phone}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-solid fa-location-dot text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Address </p>
                    <p class="sub-text">{{ $contact?->address}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-regular fa-clock text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Open time </p>
                    <p class="sub-text">{{ $contact?->time}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fa-regular fa-envelope text fa-2x py-4"></i>
                    <p class="fw-bold fs-4 mb-1">Email </p>
                    <p class="sub-text">{{ $contact?->email}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- -------map ------------------ -->


    <div class="map-container mb-5 py-5 position-relative">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.404421167531!2d90.35478671158252!3d23.768608878568884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a18afe7eab%3A0x57ec2dfc2920c0b0!2sShekhertek%20Rd.8%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1762341315662!5m2!1sen!2sbd"
            class="map-size" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="card map-card center-card shadow text-center">
            <div class="card-body p-4">
                <h4 class="card-title mb-3 fw-bold">New York</h4>
                <p class="card-text mb-1">Phone: {{ $contact?->phone}}</p>
                <p class="card-text">Add: {{ $contact?->address}}</p>
            </div>
        </div>

    </div>
    <!-- --------------------------------message section-------------- -->
    <div class="container">
        <h1 class="fw-bold text-center mb-5">Leave Message</h1>
        <div class="">
            <div class="d-flex justify-content-between gap-5 mb-3">
                <div class="mb-3 flex-grow-1 ">
                    <input type="text" class="form-control py-2 border-lgt" placeholder=" Your name">
                </div>
                <div class="mb-3 flex-grow-1">
                    <input type="text" class="form-control border-lgt py-2" placeholder="Your email">
                </div>
            </div>
            <div class="mb-4">
                <textarea name="" id="" cols="30" rows="6" class="form-control border-lgt"
                    placeholder="Your message"></textarea>
            </div>
            <div class="d-flex justify-content-center pt-2 pb-4 mb-5">
                <button class="btn send text-white fw-bold py-3 px-4 color-bg ">SEND MESSAGE</button>
            </div>
        </div>
    </div>
@endsection
