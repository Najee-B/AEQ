@extends('layouts.app')
@section('title','AMMONIUM PERCHLORATE')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>CHEMICAL</h1>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h4 class="card-header">Chemical</h4>
        <div class="row mx-0 cards py-5 px-4 border mt-3 d-flex align-items-start">
                 <div class="col-lg-7 col-md-6 col-12 card-content-inner">
                    <h5 class="card-title mb-3"><b>AMMONIUM PERCHLORATE</b></h5>
                    <p>Ammonium Perchlorate’s primary use is as the oxidizer of solid propellants for rockets and missiles. AEQ produces ammonium perchlorate with a composition of fine rounded grains to optimize the performance of any propellant. It meets all international specifications including the MIL-A-192B Standard as approved and adopted by the US and countries worldwide.</p>
                    <p>Ammonium Perchlorate can be used as solid propellant composites, for satellite launching vehicles and Sonda rockets, missiles, rocket motors, and even air bags.</p>
                    <p>AEQ’s premium-caliber ammonium perchlorate can be manufactured to the specific particle grain size required:</p>
                    <ul>
                      <li>Fine Grain: 20 – 90 micron</li>
                      <li>Medium grain: 200 micron</li>
                      <li>Coarse grain: 400 micron</li>
                    </ul>
                    <p>Every element of safety is applied when packaging the AEQ ammonium perchlorate. It is packed in dry moisture-proof sealed containers as approved by the Brazilian Navy for overseas shipping. To ensure stability and safety during transport, the product can be packed in 25kg bags or in 225kg drums (net weight) containing desiccant to control moisture.</p>
                    <button class="download mb-4 border-0 px-3 py-2"><a href="#" >DOWNLOAD BROCHURE</a></button>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/AMMONIUM-1.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>


@endsection