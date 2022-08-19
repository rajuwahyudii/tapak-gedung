@extends('layouts.user')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('user/vendors/owl-carousel/owl.carousel.min.css') }}">
@endsection

@section('meta')
  <meta name="title" content="desa Tapak Gedung">
  <meta name="description" content="Desa Tapak Gedung, desa wisata Kabupaten Bengkulu Tengah, Provinsi Bengkulu">
  <meta name=”robots” content="index, follow">
  <meta name="keywords" content="desa Tapak Gedung, bengkulu, bengkulu tengah, wisata bengkulu, wisata keluarga, desa wisata, wisata glamping, wisata daerah, kopi bengkulu, wisata sungai">
@endsection

@section('content')
  @include('inc.user.navbar')

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/logo.svg" height="34" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Service</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#destination">Destination</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Booking</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">Testimonial</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#!">Login</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!">Sign Up</a></li>
              <li class="nav-item dropdown px-3 px-lg-0"> <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">EN</a></li>
                  <li><a class="dropdown-item" href="#!">BN</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
      <section style="padding-top: 7rem;">
        {{-- <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div> --}}
        <div class="bg-holder" style="background-image:url({{ URL::asset('storage/img2/hero/hero-bg.svg')}});">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="{{ URL::asset('storage/img2/hero/hero-img.png')}}" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              {{-- <h4 class="fw-bold text-danger mb-3">Best Destinations around the world</h4> --}}
              <h4 class="fw-bold text-danger mb-3">Destinasi wisata terbaik</h4>
              <h1 class="hero-title">Wisata Desa <br> Tapak Gedung</h1>
              <p class="mb-4 fw-medium">Desa Tapak Gedung merupakan objek wisata populer yang dapat<br class="d-none d-xl-block" />Anda kunjungi bersama Teman dan Keluarga tercinta.<br class="d-none d-xl-block" />Terdapat banyak jenis rekreasi yang seru</p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="{{route('user.blog.wisata', $objek_wisata->slug)}}" role="button">Cari Tahu Lagi</a>
                <div class="video-popup w-100 d-block d-md-none"></div>
                  <a href="{{$youtube->link}}" role="button" class="play-video  animate" data-animate="zoomIn"
                    data-duration="1.5s" data-delay="0.1s" >
                    <span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> 
                      <img src="{{ URL::asset('storage/img2/hero/play.svg')}}" width="15" alt="play"/>
                    </span>
                  </a><span class="fw-medium">Lihat Video</span>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      {{-- <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="{{ URL::asset('storage/img2/category/shape.svg')}}" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">CATEGORY </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">We Offer Best Services</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ URL::asset('storage/img2/category/icon1.png')}}" width="75" alt="Service" />
                  <h4 class="mb-3">Calculated Weather</h4>
                  <p class="mb-0 fw-medium">Built Wicket longer admire do barton vanity itself do in it.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ URL::asset('storage/img2/category/icon2.png')}}" width="75" alt="Service" />
                  <h4 class="mb-3">Best Flights</h4>
                  <p class="mb-0 fw-medium">Engrossed listening. Park gate sell they west hard for the.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ URL::asset('storage/img2/category/icon3.png')}}" width="75" alt="Service" />
                  <h4 class="mb-3">Local Events</h4>
                  <p class="mb-0 fw-medium">Barton vanity itself do in it. Preferd to men it engrossed listening.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ URL::asset('storage/img2/category/icon4.png')}}" width="75" alt="Service" />
                  <h4 class="mb-3">Customization</h4>
                  <p class="mb-0 fw-medium">We deliver outsourced aviation services for military customers</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section> --}}
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="destination">

        <div class="container">
          <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="{{ URL::asset('storage/img2/dest/shape.svg')}}" alt="destination" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">Tapak Gedung</h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Objek Wisata</h3>
          </div>
          <div class="row">
            @foreach ($wisatas as $wisata)
              <div class="col-md-4 mb-4">
                <div class="card overflow-hidden shadow"> <img class="card-img-top" src="{{ URL::asset('storage/berita') }}/{{$wisata->thumbnail}}" alt="{{$wisata->wisata}}" />
                  <div class="card-body py-4 px-3">
                    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                      <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="{{route('user.blog.wisata', $wisata->slug)}}">{{$wisata->wisata}}</a></h4>
                      {{-- <span class="fs-1 fw-medium">$15k</span> --}}
                    </div>
                    {{-- <div class="d-flex align-items-center"> <img src="{{ URL::asset('storage/img2/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium">28 Days Trip</span></div> --}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      {{-- <section id="booking">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="mb-4 text-start">
                <h5 class="text-secondary">Easy and Fast </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your next trip in 3 easy steps</h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ URL::asset('storage/img2/steps/selection.svg')}}" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Choose Destination</h5>
                  <p>Choose your favourite place. No matter <br class="d-none d-sm-block"> where you travel inside the World.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ URL::asset('storage/img2/steps/water-sport.svg')}}" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Make Payment</h5>
                  <p>After find your perfect spot, make your <br class="d-none d-sm-block"> payment and get ready to travel.</p>
                </div>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img src="{{ URL::asset('storage/img2/steps/taxi.svg')}}" width="22" alt="steps" /></div>
                <div class="flex-1">
                  <h5 class="text-secondary fw-bold fs-0">Reach Airport on Selected Date</h5>
                  <p>Lastly, you have to arrive at the airport <br class="d-none d-sm-block"> on time and enjoy the vacation.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
              <div class="card position-relative shadow" style="max-width: 370px;">
                <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;"> <img src="{{ URL::asset('storage/img2/steps/bg.png')}}" style="max-width:550px;" alt="shape" /></div>
                <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100" src="{{ URL::asset('storage/img2/steps/booking-img.jpg')}}" alt="booking" />
                  <div>
                    <h5 class="fw-medium">Trip To Greece</h5>
                    <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                    <div class="icon-group mb-4"> <span class="btn icon-item"> <img src="{{ URL::asset('storage/img2/steps/leaf.svg')}}" alt=""/></span><span class="btn icon-item"> <img src="assets/img/steps/map.svg" alt=""/></span><span class="btn icon-item"> <img src="assets/img/steps/send.svg" alt=""/></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center mt-n1"><img class="me-3" src="{{ URL::asset('storage/img2/steps/building.svg')}}" width="18" alt="building" /><span class="fs--1 fw-medium">24 people going</span></div>
                      <div class="show-onhover position-relative">
                        <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px;border-radius:18px;">
                          <div class="card-body py-3">
                            <div class="d-flex">
                              <div style="margin-right: 10px"> <img class="rounded-circle" src="{{ URL::asset('storage/img2/steps/favorite-placeholder.png')}}" width="50" alt="favorite" /></div>
                              <div>
                                <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                <h5 class="fw-medium mb-3">Trip to rome</h5>
                                <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed</h6>
                                <div class="progress" style="height: 6px;">
                                  <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn"> <img src="{{ URL::asset('storage/img2/steps/heart.svg')}}" width="20" alt="step" /></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section> --}}
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-8 text-start">
                <h5 class="text-secondary">Testimonials </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Apa yang mereka katakan tentang Tapak Gedung.</h3>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="pe-7 ps-5 ps-lg-0">
                <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{ URL::asset('storage/img2/testimonial/author.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Senang sekali menikmati wisata di desa ini, cuaca nya yang dingin bikin suasana jadi adem&quot;</p>
                          <h5 class="text-secondary">Sahrial Ishani</h5>
                          <p class="fw-medium fs--1 mb-0">Bengkulu, Indonesia</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{ URL::asset('storage/img2/testimonial/author2.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Jadoo is recognized as one of the finest travel agency in the world. When it came to planning a trip, I found them to be dependable.&quot;</p>
                          <h5 class="text-secondary">Thomas Wagon</h5>
                          <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{ URL::asset('storage/img2/testimonial/author3.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.&quot;</p>
                          <h5 class="text-secondary">Kelly Willium</h5>
                          <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                  </div>
                  <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="{{ URL::asset('storage/img2/icons/up.svg')}}" width="16" alt="icon" /></button>
                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="{{ URL::asset('storage/img2/icons/down.svg')}}" width="16" alt="icon" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      {{-- <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
          <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{ URL::asset('storage/img2/partner/1.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{ URL::asset('storage/img2/partner/2.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{ URL::asset('storage/img2/partner/3.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{ URL::asset('storage/img2/partner/4.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{ URL::asset('storage/img2/partner/5.png')}}" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6">

        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="{{ URL::asset('storage/img2/cta/send.png')}}" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="{{ URL::asset('storage/img2/cta/shape-bg2.png')}}" width="264" alt="cta shape" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="{{ URL::asset('storage/img2/cta/shape-bg1.png')}}" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">Kirim testimoni, mengenai desa wisata <br>Tapak Gedung</h2>
                <form class="row g-3 align-items-center w-lg-75 mx-auto">
                  <div class="col-sm">
                    <div class="input-group-icon">
                      <input class="form-control form-little-squirrel-control" type="email" placeholder="Testimoni" aria-label="email" /><img class="input-box-icon" src="{{ URL::asset('storage/img2/cta/mail.svg')}}" width="17" alt="mail" />
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <button class="btn btn-danger orange-gradient-btn fs--1">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      @include('inc.user.footer')

@endsection

