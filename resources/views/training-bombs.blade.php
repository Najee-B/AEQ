@extends('layouts.app')
@section('title','Training Bombs')

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
                    <h5 class="card-title mb-3"><b>Training Bomb (BDU)</b></h5>
                    <p>The AEQ BDU-33 practice-bombs are used for training purposes as a low-cost and low-risk alternative to live munitions; simulating the launching conditions of general-purpose bombs, especially in terms of their ballistics trajectory.</p>
                    <p>AEQ practice-bombs can be launched from supports on aircraft pylons, or from SUU-20 bomb dispensers; they simulate the low drag general-purpose bombs with a smoke cartridge to mark the point of impact.</p>
                    <p>The BDU-33 practice bomb, used to simulate the dropping of MK bomb, carries a signal cartridge (MK MOD 3/AEQ) that produces a column of white smoke on ground impact.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/Training-Bomb.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>

@endsection