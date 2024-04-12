@extends('layouts.app')
@section('title','Home')

@section('content')

<div class="index-hero position-relative">
    <div class="container">
        <h1 class="hero-title text-white">Your Partner in Critical Payload Delivery</h1>
    </div>
    <div class="d-flex position-absolute hero-bottom text-white">
        <div class="blue-div px-5 pt-4 pb-2">
            <h6>About AEQ</h6>
            <p>Click here to find out more</p>
            <p class="arrow mb-0 mt-4"><i class=" ti ti-arrow-top-right fs-3"></i></p>
        </div>
        <div class="red-div px-5 pt-4 pb-2">
            <h6>Our Standards</h6>
            <p>Click here to find out more</p>
            <p class="arrow mb-0 mt-4"><i class=" ti ti-arrow-top-right fs-3"></i></p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-10 col-md-12 col-12">
            <p class="hero-bttm-text">AEQ was established in 1994 to manufacture Ammonium Perchlorate for solid fuel application in rocket motors. However, AEQ's expertise in the development of defense products dates back to 1961 due to its affiliation with Britanite.</p>
            <button class="who-are-we px-5 text-white border-0 py-3">WHO ARE WE <i class=" ti ti-arrow-top-right"></i></button>
        </div>
    </div>
</div>
<div class="red-line"></div>

<!-- our-products -->
<div class="our-products py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-baseline gy-5">
            <div class="col-lg-6 col-md-6 col-12">
                <img class="rocket-img w-100" src="{{asset('images/rocket.webp')}}" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12 text-center">
                <img class="ai-img w-75" src="{{asset('images/logo-element.webp')}}" alt="">
            </div>
        </div>

        <div class="row py-5">
            <div class="col-lg-5 col-md-6 col-12">
                <h2 class="text-white">Our Products <i class="bi bi-arrow-down-right"></i></h2>
                <ul class="p-0">
                    <li><a href="">Aircraft Ordnance</a></li>
                    <li><a href="">Electronic</a></li>
                    <li><a href="">Chemical</a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <p class="text-white">Alianca Eletroquimica Ltda AEQ is a Brazilian company authorized by the Brazilian Government to provide defense products and services including the processing of explosive fillings for the Brazilian Armed Forces and the Brazilian Air Force.</p>
            </div>
        </div>
    </div>
</div>
<div class="container our-products-cta d-flex justify-content-around p-5 align-items-center">
    <h6 class="text-white"> Secure Solutions, Seamless Connection - Contact AEQ</h6>
    <button class="contact-btn px-5 text-white border-0 py-3">CONTACT NOW US<i class=" ti ti-arrow-top-right"></i></button>
</div>

<div class="position-relative py-5">
    <div class="container our-products-bttm-text">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div>
                    <p class="mb-4">AEQ addresses international concern that weapons systems are unreliable during the developmental and testing phases. Insufficient consistency in engineering activities and logistics planning during acquisition phases lead to higher ownership costs. This trend is indicative of not having reliability, availability and maintainability (RAM) protocols built into systems designs.</p>
                    <button class="pgms-std-bttn px-5 text-white border-0 py-3">CONTACT NOW US<i class=" ti ti-arrow-top-right"></i></button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img class="" src="{{asset('images/above-footer.webp')}}" alt="">
            </div>
        </div>
    </div>
</div>


@endsection