@extends('layouts.app')
@section('title','Bomb Live Unit')

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
                    <h5 class="card-title mb-3"><b>Bomb Live Unit (BLU)</b></h5>
                    <p>The BLU-109 is a 2,000 pounds hard target penetrator bomb used against bunkers, aircraft shelters and reinforced concrete structures.</p>
                    <p>It has a steel casing about 1 inch thick (25mm) filled with Tritonal. The bomb uses a delayed tail fuze and can penetrate up to 6 feet of concrete.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/BLU.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>


@endsection