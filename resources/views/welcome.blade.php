@extends('layouts.web')

@section('title', 'Sharp Edge Consulting | SEC')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel overflow-hidden">
        <div class="header-carousel-item hero-section" style="background-image: url(../img/carousel-1.jpg);">
            <!-- <div class="hero-bg-half-1"></div> -->
            <!-- <div class="hero-shape-1"></div> -->
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Current Electricity Services</h4>
                                <h1 class="display-2 text-white mb-4">Power for Seamless Electricity Solutions</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item hero-section" style="background-image: url(../img/carousel-2.jpg);">
            <!-- <div class="hero-bg-half-2"></div> -->
            <!-- <div class="hero-shape-2"></div> -->
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Current Electricity Services</h4>
                                <h1 class="display-2 text-white mb-4">Experience the power of professionalism</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy... 
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    @include('partials.about')
@endsection
