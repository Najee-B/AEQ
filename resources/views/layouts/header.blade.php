<nav>
  <div class="navbar">
    <i class='bx bx-menu'></i>
    <div class="logo">
      <a class="navbar-brand ms-5" href="{{route('index')}}">
        <img class="logo" src="{{asset('images/logo.webp')}}" width="200" alt="Logo">
      </a>
    </div>
    <div class="nav-links">
      <div class="sidebar-logo">
        <i class='bx bx-x'></i>
      </div>
      <ul class="links">
        <li><a href="{{route('our-company')}}">Our Company</a></li>
        <li>
          <a href="products">Products</a>
          <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
          <ul class="htmlCss-sub-menu sub-menu">
            <li class="more">
              <span><a href="products#product-aircraft">Aircraft</a>
                <i class='bx bxs-chevron-right arrow more-arrow1'></i>
              </span>
              <ul class="more-sub-menu sub-menu">
                  <li><a href="{{route('general-purpose-bombs')}}">GENERAL PURPOSE BOMBS</a></li>
                  <li><a href="{{route('aerial-rocket')}}">AERIAL ROCKET (FFAR)</a></li>
                  <li><a href="{{route('training-bombs')}}">TRAINING BOMB (BDU)</a></li>
                  <li><a href="{{route('bomb-live-unit')}}">BOMB LIVE UNIT (BLU)</a></li>
                  <li><a href="{{route('pre-fragmented-bombs')}}">PRE-FRAGMENTED BOMBS</a></li>
              </ul>
            </li>
            <li class="more">
              <span><a href="products#product-electronic">Electronic</a>
                <i class='bx bxs-chevron-right arrow more-arrow2'></i>
              </span>
              <ul class="more-sub-menu sub-menu">
                  <li><a href="fmu">FMU-152A/B</a></li>
                  <li><a href="M904-M905">M9O4&M9O5/AEQ</a></li>
                  <li><a href="SAM14OO">SAM 1 4OO</a></li>
              </ul>
            </li>
            <li class="more">
              <span><a href="products#product-chemical">Chemical
                <i class='bx bxs-chevron-right arrow more-arrow3'></i></a>
              </span>
              <ul class="more-sub-menu sub-menu">
                 <li><a href="{{route('ammonium')}}">AMMONIUM PERCHLORATE</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="{{route('programs-standards')}}">Programs & Standards</a></li>
        <li><a href="{{route('suppliers')}}">Suppliers</a></li>
        <li><a href="{{route('contact')}}">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>