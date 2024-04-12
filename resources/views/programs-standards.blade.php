@extends('layouts.app')
@section('title','Programs & Standards')

@section('content')

<div class="inner-page-hero">
  <div class="hero-heading py-3">
    <div class="container-fluid">
        <h1>Programs & Standards</h1>
    </div>
  </div>
</div>



  <div>
<div class="container program mt-5">
  <h4 class="main-heading">Programs</h4>
  <div class="body-text">
    <p>AEQ addresses international concern that weapons systems are unreliable during the developmental and testing phases. Insufficient consistency in engineering activities and logistics planning during acquisition phases leads to higher ownership costs. This trend is indicative of not having reliability, availability, and maintainability (RAM) protocols built into systems designs.</p>
    <p>AEQ implements programs to execute a viable system-engineering strategy, including a robust RAM program as an integral part of the design and development of its products.</p>
  </div>
<div class="row p-0 m-0">
  <div class="col-lg-6  ">
    <ul class="program-content mt-4 ">
      <li class="d-flex justify-content-between">
        <img src="{{asset('images/reliability.png')}}" alt="">
        <div>
          <h5><b>Reliability Program Plan</b></h5>
          <p>Comprised of four objectives; (1) Understand the customer/user's requirements, (2) Design for reliability, (3) Produce reliable systems, and (4) Monitor and assess field reliability.</p>
        </div>
      </li>
      <li class="d-flex justify-content-between">
        <img src="{{asset('images/reliability.png')}}" alt="">
        <div>
          <h5><b>Systems-Engineering Integration</b></h5>
          <p>A comprehensive process that translates customers' needs and requirements into suitable products while balancing performance, risk, cost, and schedule. AEQ works diligently to incorporate the reliability program plan and system model throughout its processes and submits potential reliability improvements as identified. AEQ monitors and evaluates the reliability impact of changes to designs, systems and manufacturing and ensure adherence to design rules and guidelines.</p>
        </div>
      </li>
      </ul>
  </div>
  <div class="col-lg-6  mt-4">
    <ul class="program-content">
    <li class="d-flex justify-content-between">
      <img src="{{asset('images/reliability.png')}}" alt="">
      <div>
        <h5><b>System Reliability Model</b></h5>
        <p>Employed to generate and update the reliability allocations, from the system level down to lower indenture levels, to aggregate system-level reliability based on reliability estimates from lower indenture levels, to identify single points of failure and critical areas where additional design or testing activities are required in order to achieve the reliability requirements.</p>
      </div>
    </li>
  </ul>
  </div>
</div>  
</div>


@endsection