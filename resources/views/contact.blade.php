@extends('layouts.app')
@section('title','contact')

@section('content')
@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<div class="inner-page-hero">
    <div class="hero-heading py-3">
      <div class="container-fluid">
          <h1>Contact Us</h1>
      </div>
    </div>
  </div>
  
<!-- contact-hero -->
<div class="container mt-5">
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=770&amp;height=441&amp;hl=en&amp;q=Rua Arnalodo Perine&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Puzzle</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:441px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:441px;}.gmap_iframe {height:441px!important;}</style></div>

    <div class="row gy-3 mt-5 contact-container">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{asset('images/maps-and-flags.png')}}" height="50px" width="50px" alt="">
                </div>
                <div class="col-lg-10 col-md-8 col-12">
                    <p class="addrss">Rua Arnalodo Perine 456,<br> Quatro Barras, parana 83420,<br> Fedarative Republic of Brazil</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{asset('images/email.png')}}" height="50px" width="50px" alt="">
                </div>
                <div class="col-lg-10 col-md-8 col-12">
                    <span>For General Enquiries contact us on:</span><br>
                    <a class="mail-id" href="mailto:info@aeqdefense.com">info@aeqdefense.com</a><br><br>
                    <span>For Product Enquiries contact us on:</span><br>
                    <a class="mail-id" href="mailto:commercial@aeqdefense.com">commercial@aeqdefense.com</a><br>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="border p-5">
                <form action="{{route('contact-submit')}}" method="POST">
                    @csrf
                    <h4 class="fw-bold fs-5 mb-3">Message Us</h4>
                    <input class="mb-2 p-2 w-100 border" placeholder="Name" type="text" name="name"><br>
                    <input class="mb-2 p-2 w-100 border" placeholder="Email" type="email" name="email"><br>
                    <input class="mb-2 p-2 w-100 border" placeholder="Phone" type="tel" name="mobile"><br>
                    <input class="mb-2 p-2 pb-4 w-100 border" placeholder="Message" type="text" name="message"><br>
                    <button type="submit" class="submit-btn text-white border-0 px-5 py-3">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection