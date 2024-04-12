@extends('layouts.app')
@section('title','General Purpose Bombs')

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
                    <h5 class="card-title mb-3"><b>General Purpose Bombs</b></h5>
                    <p>The AEQ general purpose bombs (GPB) are built according to US standards and fulfill worldwide technical specifications. The AEQ MK Series are certified by the IFI (Industrial Development Institute), a DCTA (Aerospace Technological and Scientific Department) certification body, and are in accordance with NATO Quality Assurance.</p>
                    <p>These weapons are fitted with nose and tail fuzes and can be equipped with different tail fin assemblies, including guidance kits.</p>
                    <p>These airdropped bombs are effective against armored, fixed and mobile targets, including artillery, trucks, bunkers, launch sites, and radars.</p>
                    <p>The AEQ MK Series include the MK-81, MK-82, MK-83, and MK-84 bombs all with electronic proximity or mechanical impact nose (M904) and tail (M905) fuzes. All have low-drag fin stabilizers with the option of guided or ballistic guidance kits.</p>
                    <button class="download mb-4 border-0 px-3 py-2"><a href="#" >DOWNLOAD BROCHURE</a></button>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/productimg-bomb1.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>


@endsection