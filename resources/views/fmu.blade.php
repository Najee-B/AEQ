@extends('layouts.app')
@section('title','FMU-152A/B')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>ELECTRONIC</h1>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h4 class="card-header">Electronic</h4>
        <div class="row mx-0 cards py-5 px-4 border mt-3 d-flex align-items-start">
                 <div class="col-lg-7 col-md-6 col-12 card-content-inner">
                    <h5 class="card-title mb-3"><b>FMU-152A/B</b></h5>
                    <p>A Multi-Function Hard/Soft Target fuzing system developed for use by both NAVAIR and the USAF in the MK80 series, BLU-109, BLU-110, BLU-111, BLU-113, BLU-117, BLU-122 and in conjunction with JDAM and Paveway weapon kits and with High Drag and Low Drag Tail Kits.</p>
                    <p>In addition to impact/post-impact delay, the fuze is capable of accepting a signal from a separate Proximity Sensor (e.g., DSU- 33D/B). The Fuzing system meets the safety criteria of MIL-STD-1316D.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/Electronic-1-1.jpg')}}" alt="Card image cap">
                   </div>
        </div>
</div>


@endsection