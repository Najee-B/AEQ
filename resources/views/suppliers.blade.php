@extends('layouts.app')
@section('title','Suppliers')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>Suppliers</h1>
    </div>
  </div>
</div>

<!-- Optimizing -->
<div class="container optimizing-section mt-5">
  <h4 class="main-heading">Optimizing Our Supply Chain</h4>
  <p>If you are a supplier of raw materials used in our industry and would like to promote your products with us, please feel free to send us your corporate profile, product datasheet etc. at: <a href="">supply@aeqdefense.com</a></p>
  <img src="asset/images/suppliersimg1.jpg" alt="" class="w-100 mt-4 mb-5">
  <p>Nulla facilisi. Aliquam vitae felis nulla. Maecenas vel ex volutpat lacus vestibulum fringilla. Aliquam metus odio, facilisis quis risus vitae, hen- drerit auctor arcu. Etiam accumsan congue cursus. Proin at maximus magna, ac porta dolor. Nullam quis vestibulum ligula. Nam in eros sit amet enim condimentum imperdiet in a eros. Phasellus sollicitudin volutpat orci a auctor. Nullam posuere leo lacus. Donec iaculis sapien</p>

  <h4 class="mt-5">Aliquam vitae felis nulla:</h4>
  <ul>
    <li>Maecenas vel ex volutpat lacus vestibulum fringilla</li>
    <li>Aliquam metus odio, facilisis quis risus vitae</li>
    <li>Praesent lorem justo, hendrerit nec porttitor a</li>
  </ul>

  <!-- clients -->
  <div class="row m-0 d-flex align-items-center client-logo py-5 text-center">
    <div class="col-lg-3 col-md-6 col-6">
      <div>
        <img src="{{asset('images/client4.JPG')}}" alt="" class="w-75">
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6">
      <div>
        <img src="{{asset('images/client4.JPG')}}" alt="" class="w-75">
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6">
      <div> 
        <img src="{{asset('images/client4.JPG')}}" alt="" class="w-75">
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-6">
      <div>
        <img src="{{asset('images/client4.JPG')}}" alt="" class="w-75">
      </div>
    </div>
  </div>
</div>

@endsection