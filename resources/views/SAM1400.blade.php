@extends('layouts.app')
@section('title','SAM 1 4OO')

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
                    <h5 class="card-title mb-3"><b>SAM 1 4OO</b></h5>
                    <p>The fuze incorporates exciting new state of the art technology using SFMCW, a proprietary technology ensuring height of burst accuracy of 6meters ±2meters, also rendering the fuze immune to mutual interference, enemy jamming and battlefield disturbances such as dust, smoke and other radio emissions, utilizing comprehensive signal processing technology Enhanced life cycle(no batteries or stored energy) increases shelf life up to 15 years if stored in original packaging in controlled deport condition environment.</p>
                  </div>
                  <div class="col-lg-5 col-md-6 col-12">
                     <img class="w-100" src="{{asset('images/FUZE-1.png')}}" alt="Card image cap">
                   </div>
        </div>
</div>



@endsection