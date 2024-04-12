@extends('layouts.app')
@section('title','Aerial Rocket (FFAR)')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>AIRCRAFT ORDNANCE</h1>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h4 class="card-header">Aircraft Ordnance</h4>
        <div class="row mx-0 cards py-5 px-4 border mt-3 d-flex align-items-start">
                 <div class="col-lg-7 col-md-6 col-12 card-content-inner">
                    <h5 class="card-title mb-3"><b>Aerial Rocket (FFAR)</b></h5>
                    <p>The FFAR - MK40 is a 2.75-inch unguided, folding fin, air-to-ground rocket, designed to be deployed from a helicopter or aircraft.</p>
                    <p>The FFOG-70 HP/AEQ rocket is a 2.75-inch high performance unguided air-to-ground rocket with three wrap-around fins for stabilization.</p>
                    <p>Three types of fuzes may be fitted on the rocket such as Point Detonating, Proximity Airburst or Airburst / Motor Burnout Delay.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/Arial-Rocket-FFAR.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>

@endsection