@extends('layouts.app')
@section('title','Pre-Fragmented Bombs')

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
                    <h5 class="card-title mb-3"><b>Pre-Fragmented Bombs</b></h5>
                    <p>The AEQ Series of Pre – Fragmented bombs, PF-81, PF-82, PF-83 and PF-84, are efficient when a superior fragmentation effect is desired for particular targets with the condition of preserving facilities, buildings, and forests as their deployment does not cause material destruction.</p>
                    <p>AEQ Pre – Fragmented bombs contain high quantities of fragments and have a reduced blast effect in comparison to conventional general-purpose bombs.</p>
                    <p>The manufacturing process comprises of rigorous performance parameters testing and inclusion of a large number of steel balls for maximum blast and fragmentation effect against soft targets.</p>
                    <p>The AEQ Pre – Fragmented munitions are equipped with two mechanical fuzes, the nose M904 and tail M905.</p>
                    <button class="download mb-4 border-0 px-3 py-2"><a href="#" >DOWNLOAD BROCHURE</a></button>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/pre-fragmented-bomb.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>

@endsection