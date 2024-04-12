@extends('layouts.app')
@section('title','Our Company')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>Our Company</h1>
    </div>
  </div>
</div>



<div class="container mt-5">
  <div class="row d-flex align-items-center">
    <div class="col-lg-6 col-md-6 col-12">
      <h6><b>Historical Overview</b></h6>
      <h4 class="main-heading text-justify mt-4">AEQ was established in 1994 to manufacture Ammonium Perchlorate for solid fuel application in rocket motors.</h3>
      <p>However, AEQ's expertise in the development of defense products dates back to 1961 due to its affiliation with Britanite.</p>
      <p>Britanite, headquartered in Quatro Barras City Brazil, focused on the manufacturing of explosives to support electrical, construction, rail and road infrastructure.</p>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="">
        <img src="{{asset('images/ourcompany-secondimg.jpg')}}"  alt="" class="w-100">
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
      <p >In 1981, the company branched out and created a defense products division to supply the Brazilian Army with ground mines and the loading and unloading of existing aviation bombs for the Brazilian Air Force.</p>  
      <p>1984 subsequently saw the development of mortar training systems and grenade launchers for the Brazilian Army and Navy followed by the development of signaling and illuminating rockets for the Brazilian Navy in 1987.</p>
      <p>In 1999, Britanite commenced the development process for the production of General Purpose and Pre-Fragmented Bombs (81 to 84 GPB) as per the American MK series with the Prototype Construction and Certification Process beginning in 2003 with the successful conclusion of the Aviation Bombs Certification Process in 2006.</p>
      <p>Britanite continued to expand its product range and in 2007 it began the Prototype Construction and Certification Process for 70mm (MK-40 and MK-66) Rockets (Rocket Motors and Warheads).</p>
      <p>In 2008 Britanite acquired AEQ and by 2012 all defense-related products developed by Britanite moved under AEQ's remit.</p>
      <p>AEQ continued to invest and advance its range of defense-related products and services and in 2013 successfully concluded the Rockets Certification process. This was followed by the successful conclusion of the development of GPS Guidance Kits for MK-82, Missile Warheads with MEKTRON in 2014. The Certification Process for MK-84 General Purpose and Pre-Fragmented Bombs then commenced in 2017.</p>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row d-flex align-items-center">
    <div class="col-lg-6 col-md-6 col-12">
      <div>
        <img src="{{asset('images/ourcompanyimg3.jpg')}}" alt="" class="w-100">
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h6><b>AEQ Today</b></h6>
      <h4 class="main-heading text-justify mt-4">Alianca Eletroquimica Ltda - AEQ is a Brazilian company authorized by the Brazilian Government to provide</h3>
        <p>defense products and services including the processing of explosive fillings for the Brazilian Armed Forces
          and the Brazilian Air Force.</p>
         <p> AEQ also produces Ammonium Perchlorate making it a strategic part- ner of the Brazilian Space Program.</p>
                
    </div>
    <div class="col-lg-12 col-md-12 col-12">
      <p>Aside from the engineering requirements of ordnance products, the company also offers services to integrate
          and sustain these advanced technology systems.</p>
      <p>A team of knowledgeable experts in metal-mechanics, chemical and explosive engineering oversee AEQ's
        industrial facilities that are ca- pable of the simultaneous production and assembly of large rockets, several
        types of air bombs and other military products.</p>
        <p>AEQ sells its products to more than 20 client countries in Latin America, Europe, Middle East, and Africa.</p>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
      <img src="{{asset('images/ourcompanyimg4.jpg')}}" alt="" class="w-100 mt-4 mb-3">
      <p>We at AEQ are committed to providing a quality service in a manner that ensures a safe and healthy workplace for our employees and minimizes our impact on the environment. We shall strive to operate in compliance with all relevant environmental legislations of the Federative Republic of Brazil, and we will strive to use pollution prevention and environmental best practices in all we do.</p>
      <h4 class="mt-4"><b>Our key Policy highlights are:</b></h4>
      <ul class="hist-sub-para">
        <li>Integrate the consideration of environmental concerns and impacts into our decision making and activities. Minimize our waste and then reuse or recycle as much of it as is possible.</li>
        <li>Minimize energy and water usage within our buildings and processes to conserve supplies and minimize the consumption of natural resources.</li>
        <li>As far as possible, purchase products and services that do the least damage to the environment.</li>
        <li>Train, educate and inform our employees about environmental issues that may affect their work.</li>
        <li>Promote environmental awareness among our employees and encourage them to work in an environmentally responsible manner.</li>
        <li>Where required by legislation or where significant health, safety, or environmental hazards exist, develop and maintain appropriate emergency and spill response programs.</li>
      </ul>
    </div>
  </div>
</div>




@endsection
