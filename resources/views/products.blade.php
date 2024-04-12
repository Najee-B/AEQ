@extends('layouts.app')
@section('title','Products')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>Products</h1>
    </div>
  </div>
</div>
<!-- product-category1 -->
<div class="container">
<div class="product-category mt-5" id="product-aircraft">
  <h4>Aircraft Ordnance</h4>
  <div class="row m-0">
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/genaral-purpose-bomb.png')}}" class="w-75" alt="...">
      </div>
      <h5>General Purpose Bombs</h5>
      <p>The AEQ general purpose bombs (GPB) are built according to US standards and fulfil worldwide technical specifications.. <a href="{{route('general-purpose-bombs')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/pre-fragmented-bomb.png')}}" class="w-50" alt="...">
      </div>
      <h5>Pre-Fragmented Bombs</h5>
      <p>The AEQ Series of Pre- Fragmented bombs, PF-81, PF-82, PF-83 and PF-84, are efficient when a superior fragmentation effect.. <a href="{{route('pre-fragmented-bombs')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset("images/BLU.png")}}" class="w-75" alt="...">
      </div>
      <h5>Bomb Live Unit (BLU)</h5>
      <p>The BLU-109 is a 2,000 pounds hard target penetrator bomb used against bunkers, aircraft shelters and rein- forced concrete.. <a href="{{route('bomb-live-unit')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/Arial-Rocket-FFAR.png')}}" class="w-50" alt="...">
      </div>
      <h5>Aerial Rocket (FFAR)</h5>
      <p>The FFAR MK40 is a 2.75-inch un- guided, folding fin, air-to-ground rocket, designed to be deployed from a.. <a href="{{route('aerial-rocket')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/Training-Bomb.png')}}" class="w-50" alt="...">
      </div>
      <h5>Training Bomb (BDU)</h5>
      <p>The AEQ BDU-33 practice-bombs are used for training purposes as a low-cost and low-risk alternative to live munitions;.. <a href="{{route('training-bombs')}}">Read More ></a></p>
    </div>
  </div>
</div>

<!-- product-category2 -->
<div class="product-category mt-5" id="product-electronic">
  <h4>Electronic</h4>
  <div class="row m-0">
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/Electronic-1-1.jpg')}}" class="w-75" alt="...">
      </div>
      <h5>FMU-152A/B</h5>
      <p>A Multi-Function Hard/Soft Target fuzing system developed for use by both NAVAIR and the USAF in the MK80 ... <a href="{{route('fmu')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/FUZE-2.png')}}" class="w-50" alt="...">
      </div>
      <h5>M9O4&M9O5/AEQ</h5>
      <p>The M904/AEQ is a nose non-delay mechanical impact fuse and The M905/AEQ is a tail non-delay mechanical impact ... <a href="{{route('M904-M905')}}">Read More ></a></p>
    </div>
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/FUZE-1.png')}}" class="w-75" alt="...">
      </div>
      <h5>SAM 1 4OO</h5>
      <p>The fuze incorporates exciting new state of the art technology using SFMCW, a proprietary technology ensuring height of ... <a href="{{('SAM14OO')}}">Read More ></a></p>
    </div>
  </div>
</div>

<!-- product-category3 -->
<div class="product-category mt-5" id="product-chemical">
  <h4>Chemical</h4>
  <div class="row m-0">
    <div class="col-lg-4 col-md-6 col-12 border p-4">
      <div class="crd-img">
        <img src="{{asset('images/AMMONIUM-1.png')}}" class="w-75" alt="...">
      </div>
      <h5>AMMONIUM PERCHLORATE</h5>
      <p>Ammonium Perchlorate’s primary use is as the oxidizer of solid propellants for rockets and missiles. AEQ produces ammonium ... <a href="{{('ammonium')}}">Read More ></a></p>
    </div>
  </div>
</div>
</div>

@endsection