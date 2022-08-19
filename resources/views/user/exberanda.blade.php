@extends('layouts.user')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('user/vendors/owl-carousel/owl.carousel.min.css') }}">
@endsection

@section('meta')
  <meta name="title" content="desa rindu hati">
  <meta name="description" content="Desa Rindu Hati, desa wisata Kabupaten Bengkulu Tengah, Provinsi Bengkulu">
  <meta name=”robots” content="index, follow">
  <meta name="keywords" content="desa rindu hati, bengkulu, bengkulu tengah, wisata bengkulu, wisata keluarga, desa wisata, wisata glamping, wisata daerah, kopi bengkulu, wisata sungai">
@endsection

@section('content')
  @include('inc.user.navbar')
<!--================ Start banner section =================-->
<section class="home-banner-area relative">
  <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center">
          <div class="header-right col-lg-6 col-md-6">
              <h1>
                  {{$objek_wisata->wisata}}<br>
                  Desa Rindu Hati
              </h1>
              <p class="pt-20">
                  {{$objek_wisata->wisata}} Desa Rindu Hati merupakan objek wisata populer yang dapat anda kunjungi bersama Teman dan Keluarga tercinta
              </p>
              <a href="{{route('user.blog.wisata', $objek_wisata->slug)}}" class="main_btn">
                  Lihat Detail
                  <img src="{{ URL::asset('storage/img/next.png')}}" alt="">
              </a>
          </div>
          <div class="col-lg-6 col-md-6 header-left">
              <div class="">
                  <img class="img-fluid w-100" src="{{ URL::asset('storage/berita') }}/{{$objek_wisata->thumbnail}}" alt="">
              </div>
              <div class="video-popup d-flex align-items-center">
                  {{-- <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=j1AXFNPmQ7g" data-animate="zoomIn" --}}
                  <a class="play-video video-play-button animate" href="{{$youtube->link}}" data-animate="zoomIn"
                    data-duration="1.5s" data-delay="0.1s">
                      <span></span>
                  </a>
                  <div class="watch">
                      <h5>Watch Intro Video</h5>
                      <p>You will love our execution</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--================ End banner section =================-->
<!--================ Start Amenities Area =================-->
<section class="amenities-area section_gap">
  <div class="container">
    <div class="row align-items-end justify-content-left">
      <div class="col-lg-6">
        <div class="main_title">
          <h1>Terbaru Dari <br> Desa Rindu Hati</h1>
          <p>Rindu hati merupakan desa wisata yang terletak di kabupaten Bengkulu Tengah</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      @foreach ($artikel_terbarus as $artikel_terbaru)
          <!-- single-blog -->
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="single-amenities" style="height: calc(100% - 15px); margin-bottom: 15px;">
              <div class="amenities-thumb">
                <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$artikel_terbaru->thumbnail}}) no-repeat center;"></div>
                {{-- <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$artikel_terbaru->thumbnail}}" alt=""> --}}
              </div>
              <div class="amenities-details">
                <div class="amenities-meta">
                  <a style="background-color: #398EA8; color:white;" href=""><span>{{$artikel_terbaru->wisata}}</span></a>
                </div>
                <h5><a href="{{route('user.blog.show', [$artikel_terbaru->menu_slug, $artikel_terbaru->slug])}}">{{$artikel_terbaru->judul}}</a></h5>
                <p>{!! Str::limit(strip_tags($artikel_terbaru->kontent), 200 ,'...') !!}</p>
              </div>
            </div>
          </div>
      @endforeach
      
    </div>
  </div>
</section>
<!--================ End Amenities Area =================-->
  <!--================ Start Packages Service Area =================-->
  
  <section class="package-area mt-5 mb-5">
    <div style="min-height: 10vh;"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="main_title">
            <h1>Pariwisata <br>Di Desa <br> Rindu Hati</h1>
            <p class="mt-5 mb-2">Ekslorasi semua semua objek wisata di Desa Rindu Hati, Temukan kesenangan baru bersama keluarga dan teman.</p>
            <a href="#galeri" class="main_btn">
              Lihat Galeri
              <img src="{{ URL::asset('storage/img/next.png')}}" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 col-md-12 mt-5 mb-5" >
          <div class="owl-carousel active-gallery-carousel">
            @foreach ($wisatas as $wisata)
              <!-- single gallery -->
                <div class="single-gallery" style="height: calc(100% - 15px); margin-bottom: 15px;">
                  <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$wisata->thumbnail}}" alt="">
                  <div class="gallery-content">
                    <div class="title align-items-center justify-content-between d-flex">
                      <p>DESA RINDU HATI</p>
                    </div>
                    <a href="{{route('user.blog.wisata', $wisata->slug)}}">
                      <h4>{{$wisata->wisata}}</h4>
                    </a>
                  </div>
                  <div class="light-box">
                    <a href="{{ URL::asset('storage/berita') }}/{{$wisata->thumbnail}}" class="img-popup">
                      <span class="lnr lnr-magnifier"></span>
                    </a>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div style="min-height: 10vh;"></div>
  </section>
  <!--================ End Portfolio Service Area =================-->
  <!--================ Start Blog Area =================-->
  <section class="blog-area section_gap mt-5 mb-5">
    <div class="container">
      <div class="row align-items-end justify-content-left">
        <div class="col-lg-5">
          <div class="main_title">
            <h1>Baca juga...</h1>
            <p>Artikel Lainnya Seputar Desa Rindu Hati Kabupaten Bengkulu Tengah</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        @foreach ($artikel_lainnyas as $artikel_lainnya)
            <!-- single-blog -->
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-blog" style="height: calc(100% - 15px); margin-bottom: 15px;">
                <div class="blog-thumb">
                  {{-- <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$artikel_lainnya->thumbnail}}" alt=""> --}}
                  <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$artikel_lainnya->thumbnail}}) no-repeat center;"></div>
                </div>
                <div class="blog-details">
                  <div class="blog-meta">
                    <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>{{ date('j F, Y', strtotime($artikel_lainnya->created_at)) }}</a>
                  </div>
                  <h5><a href="{{route('user.blog.show', [$artikel_lainnya->menu_slug, $artikel_lainnya->slug])}}">{{$artikel_lainnya->judul}}</a></h5>
                  <p>{!! Str::limit(strip_tags($artikel_lainnya->kontent), 150 ,'...') !!}</p>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

  <!-- ======= Portfoio Section ======= -->
  <section id="portfolio" class="portfoio mt-5 mb-5">
    <div class="container" data-aos="fade-up">

      <div class="main_title" id="galeri">
        <h1>Galeri Wisata</h1>
      </div>

      <div class="row portfolio-container">
        @foreach ($galeris as $galeri)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            {{-- <img style="height: 30vh;" src="{{ URL::asset('storage/berita') }}/{{$galeri->thumbnail}}" class="img-fluid" alt=""> --}}
            <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$galeri->gambar}}) no-repeat center;"></div>
            <div class="portfolio-info m-5">
              <a href="{{ URL::asset('storage/berita') }}/{{$galeri->gambar}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <!-- single-blog -->
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Portfoio Section -->
  <!--================ End Newsletter Area =================-->
  @include('inc.user.footer')
  <script src="{{ asset('user/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script>
    jQuery(document).ready(function($) {
      $('.owl-carousel').owlCarousel({
          items:1,
          margin:10,
          autoHeight:true
      });
      });
  </script>
@endsection

