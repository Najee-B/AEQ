@extends('layouts.app')
@section('title','M9O4&M9O5/AEQ')

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
                    <h5 class="card-title mb-3"><b>M9O4&M9O5/AEQ</b></h5>
                    <p>The M904/AEQ is a nose non-delay mechanical impact fuse and The M905/AEQ is a tail non-delay mechanical impact fuse.</p>
                    <p>Both fuses can be configured for nine arming times, from 2 to 18 seconds, the safety block being released after traveling for approximately 1,000 feet.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/FUZE-2.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>


@endsection