

@extends('layouts.user')

@section('meta')
  <meta name="title" content="{{$konten->wisata}} Desa Rindu Hati">
  <meta name="description" content="Desa Rindu Hati, desa wisata Kabupaten Bengkulu Tengah, Provinsi Bengkulu,{!! Str::limit(strip_tags($konten->konten), 50 ,'...') !!}">
  <meta name=”robots” content="index, follow">
  <meta name="keywords" content="{{$konten->wisata}},desa rindu hati, bengkulu, bengkulu tengah, wisata bengkulu, wisata keluarga, desa wisata, wisata glamping, wisata daerah, kopi bengkulu, wisata sungai">
@endsection

@section('content')
@include('inc.user.navbar')
{{-- <section class="home-banner-area relative">
  <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center">
          <div class="header-right col-lg-6 col-md-6">
              <h1>
                  {{$konten->wisata}}<br>
                  Desa Rindu Hati
              </h1>
              <p class="pt-20">
                {{$konten->wisata}} Desa Rindu Hati merupakan objek wisata yang dapat anda kunjungi bersama Teman dan Keluarga tercinta
              </p>
              <a href="#artikel_terkait" class="main_btn">
                  Lihat Artikel Terkait 
                  <img src="{{ URL::asset('storage/img/next.png')}}" alt="">
              </a>
          </div>
          <div class="col-lg-6 col-md-6 header-left">
              <div class="">
                  <img class="img-fluid w-100" src="{{ URL::asset('storage/berita') }}/{{$konten->thumbnail}}" alt="">
              </div>
          </div>
      </div>
  </div>
</section> --}}
<div style="min-height: 20vh;"></div>
<div class="col-lg-10 m-auto posts-list mt-5">
  <div class="main_title">
    <h1>{{$konten->wisata}}</h1>
  </div>
  <div class="single-post row">
      <div class="col-lg-12">
          <div class="feature-img">
              <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$konten->thumbnail}}" alt="">
          </div>
      </div>
      <hr>
  </div>
</div>

    <!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12 mt-5">
                        {{-- <h2 class="mb-5">{{$konten->wisata}}</h2> --}}
                        {!! $konten->konten !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 col-md-12 mb-3">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<div class="container">
  <div class="row justify-content-left">
    <div class="col-lg-6">
      <div class="main_title">
        <h1>Galeri Wisata</h1>
      </div>
    </div>
  </div>
  <div class="row portfolio-container">
    @foreach ($galeris as $galeri)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        {{-- <img style="height: 30vh;" src="{{ URL::asset('storage/berita') }}/{{$galeri->gambar}}" class="img-fluid" alt=""> --}}
        <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$galeri->gambar}}) no-repeat center;"></div>
        <div class="portfolio-info m-5">
          <a href="{{ URL::asset('storage/berita') }}/{{$galeri->gambar}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
      <!-- single-blog -->
    @endforeach
  </div>
  <hr>
</div>
<!--================ Start Blog Area =================-->
<section class="blog-area section_gap mt-5 mb-5"  id="artikel_terkait">
  <div class="container">
    <div class="row align-items-end justify-content-left">
      <div class="col-lg-6">
        <div class="main_title">
          <h1>Artikel Terkait</h1>
          <p>Baca juga artikel mengenai objek wisata {{$konten->wisata}} lainnya dibawah ini.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-left">
      @foreach ($artikel_terkaits as $artikel_terkait)
          <!-- single-blog -->
        <div class="col-lg-4 col-md-4 col-sm-6 mt-2 mb-2">
          <div class="single-blog" style="height: calc(100% - 15px); margin-bottom: 15px;">
            <div class="blog-thumb">
              {{-- <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$artikel_terkait->thumbnail}}" alt=""> --}}
              <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$artikel_terkait->thumbnail}}) no-repeat center;"></div>
            </div>
            <div class="blog-details">
              <div class="blog-meta">
                <a href="{{route('user.blog.show', [$artikel_terkait->menu_slug, $artikel_terkait->slug])}}" class="m-gap"><span class="lnr lnr-calendar-full"></span>{{ date('j F, Y', strtotime($artikel_terkait->created_at)) }}</a>
              </div>
              <h5><a href="{{route('user.blog.show', [$artikel_terkait->menu_slug, $artikel_terkait->slug])}}">{{$artikel_terkait->judul}}</a></h5>
              <p>{!! Str::limit(strip_tags($artikel_terkait->kontent), 200 ,'...') !!}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row justify-content-center">
      {{$artikel_terkaits->links("pagination::bootstrap-4")}}
    </div>
  </div>
</section>
<!--================ End Blog Area =================-->

@include('inc.user.footer')
@endsection


