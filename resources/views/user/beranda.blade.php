@extends('layouts.user')

@section('style')
 <style>
   .map-responsive{
      overflow:hidden;
      padding-bottom:26.25%;
      position:relative;
      height:0;
    }
    .map-responsive iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
 </style>
@endsection

@section('content')
<div id="sliderIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators mb-5">
    @foreach ($sliders as $slider)
      <li data-target="#sliderIndicators" data-slide-to="0" class="active"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach ($sliders as $key => $slider)
      <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
          <img style="height: 110vh;" class="d-block w-100" src="{{ URL::asset('storage/slider') }}/{{$slider->gambar}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block mb-5">
              <h3 class="font-1 display-4">{{$slider->title}}</h3>
              <h5 class="font-1 pr-5 pl-5" style="font-weight: bolder; margin-bottom: 13em;">{{$slider->caption}}</h5>
          
            </div>
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#sliderIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#sliderIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="min-height: 10vh"></div>


@if (!empty($berandakonten))
  <div class="container-fluid mt-5 mb-5">
    <div class="container p-5">
      <div class="ml-5 mr-5 mb-3 text-left">
        <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mb-3" >{{$berandakonten->judul}}</h3>
        <br>
        <p class="text-left d-inline-block font-1" >
          {{ Str::limit($berandakonten->konten, 500)  }}
        </p>
      </div>
      <div class="row ml-5 mr-5">
        <a href="{{$berandakonten->url}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          @if (Request::segment(1) == 'en')
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >View More</p>
          @else
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat Selengkapnya</p>
          @endif
          
        </a>
      </div>
    </div>
  </div>
@endif


<div style="min-height: 10vh"></div>

<div class="container-fluid mb-5">
  <div class="container bg-light p-5">
    <div class="ml-5 mr-5 mb-3 text-center">
       @if (Request::segment(1) == 'en')
          <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Latest News</h3>
          <br>
          <p class="text-left d-inline-block font-1" style=" font-w\eight:bold;" >Latest News from Master of Management  Universitas Bengkulu</p>
        @else
          <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Terbaru dari Berita</h3>
          <br>
          <p class="text-left d-inline-block font-1" style=" font-w\eight:bold;" >Berita terbaru dari magister manajemen universitas bengkulu</p>
        @endif
      
    </div>
    <div class="row justify-content-center">
      <?php $count = 0; ?>
      @foreach ($beritas as $berita)
          <?php if($count == 3) break; ?>
          <div class="m-3 d-inline-block m-1" style="width: 20rem;">
              <img class="card-img-top" width="200" height="200" src="{{ URL::asset('storage/berita') }}/{{$berita->thumbnail}}" alt="Card image cap">
              <div class="card-body" height="150" >
                  {{-- <small>Penulis : {{$berita->penulis}}</small>
                  <br> --}}
                  <small>Tanggal : {{ Str::limit($berita->created_at, 10) }} | </small>
                  <small><i class="fas fa-flag"></i> {{$berita->kategori}} </small>
                  <a href="{{route('user.berita.show', [$bahasa, $berita->kategori , $berita->slug])}}" class="text-dark">
                      <h5 class="card-title"><small><b>{{$berita->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          @if (Request::segment(1) == 'en')
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >View More</p>
          
          @else
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat berita lainnya</p>
          
          @endif
        </a>
      </div>
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="jumbotron jumbotron-fluid bg-blue text-white">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
          @if (Request::segment(1) == 'en')
            <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Location of Master of Management  Universitas Bengkulu</h3>
            <hr>
            {{-- <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Location of Master of Management  Universitas Bengkulu</p> --}}
          @else
            <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Lokasi Magister Manajemen Universitas Bengkulu</h3>
            <hr>
            {{-- <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lokasi dari magister manajemen universitas bengkulu</p> --}}
          @endif
      </div>
      <div class="col-xl-8">
          <div class="map-responsive">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15924.924568046032!2d102.272444!3d-3.7597956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1aecc8afb80fdf02!2sBengkulu%20University!5e0!3m2!1sen!2sid!4v1616526992210!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1990.616147943331!2d102.2718085006502!3d-3.759542895465086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1aecc8afb80fdf02!2sBengkulu%20University!5e0!3m2!1sen!2sid!4v1616575509374!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
    </div>
    
    
  </div>
</div>

{{-- <div class="container-fluid mb-5 ">
  <div class="row justify-content-center">
    <iframe width="853" height="480" src="https://www.youtube.com/embed/GZ71qA6WXGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
</div> --}}

<div style="min-height: 10vh"></div>

<div class="container-fluid mb-5">
  <div class="container p-5">
    <div class="ml-5 mr-5 mb-3 text-center">
      
      @if (Request::segment(1) == 'en')
        <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Upcoming Events</h3>
        <br>
        <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Upcoming Events from Master of Management  Universitas Bengkulu</p>
      @else
        <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Acara Mendatang</h3>
        <br>
        <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Acara Mendatang dari magister manajemen universitas bengkulu</p>
      @endif
    </div>
    <div class="row justify-content-center">
      <?php $count = 0; ?>
      @foreach ($events as $event)
          <?php if($count == 2) break; ?>
          <div class="m-3 d-inline-block m-1" style="width: 30rem;">
              <img class="card-img-top" width="280" height="280" src="{{ URL::asset('storage/berita') }}/{{$event->thumbnail}}" alt="Card image cap">
              <div class="card-body" height="150" >
                  <small>Tanggal : {{ Str::limit($event->created_at, 10) }} | </small>
                  <small><i class="fas fa-flag"></i> {{$event->kategori}} </small>
                  <a href="{{route('user.berita.show', [$bahasa, $event->kategori , $event->slug])}}" class="text-dark">
                      <h5 class="card-title"><small><b>{{$event->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'acara'])}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          @if (Request::segment(1) == 'en')
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >View More Events</p>
          @else
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat Acara lainnya</p>
          @endif
        </a>
      </div>
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container-fluid bg-blue text-white mt-5 mb-5">
  <div class="container p-5">
    <div class="ml-1 mr-5 mb-3 text-left">
        @if (Request::segment(1) == 'en')
          <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Announcements</h3>
          <br>
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Latest Announcements from Master of Management  Universitas Bengkulu</p>
        @else
          <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Pengumuman </h3>
          <br>
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Pengumuman terbaru dari magister manajemen universitas bengkulu</p>
        @endif
    </div>
    <div class="row justify-content-center">
      <?php $count = 0; ?>
      @foreach ($pengumumans as $pengumuman)
          <?php if($count == 3) break; ?>
          <div class="m-3 d-inline-block m-1" style="width: 20rem;">
              <img class="card-img-top" width="200" height="200" src="{{ URL::asset('storage/berita') }}/{{$pengumuman->thumbnail}}" alt="Card image cap">
              <div class="card-body" height="150" >
                  {{-- <small>Penulis : {{$pengumuman->penulis}}</small>
                  <br> --}}
                  <small>Tanggal : {{ Str::limit($pengumuman->created_at, 10) }} | </small>
                  <small><i class="fas fa-flag"></i> {{$pengumuman->kategori}} </small>
                  <a href="{{route('user.berita.show', [$bahasa, $pengumuman->kategori , $pengumuman->slug])}}" class="text-white">
                      <h5 class="card-title"><small><b>{{$pengumuman->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-blue mb-5" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          @if (Request::segment(1) == 'en')
          <p class="text-left d-inline-block text-white font-1" style=" font-weight:bold;" >View More Announcements</p>
          
          @else
          <p class="text-left d-inline-block text-white font-1" style=" font-weight:bold;" >Lihat pengumuman lainnya</p>
            
          @endif
        </a>
      </div>
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container">
  <div class="row p-5">
    <div class="col-xl-4">
      @if (Request::segment(1) == 'en')
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Job Vacancy</h4>
        <br>
      @else
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Lowongan Kerja</h4>
        <br>
      @endif
      
      <?php $count = 0; ?>
      @foreach ($lowongankerjas as $lowongankerja)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($lowongankerja->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$lowongankerja->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $lowongankerja->kategori , $lowongankerja->slug])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$lowongankerja->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      @if (Request::segment(1) == 'en')
      <a href="{{route('user.berita.index', [$bahasa, 'lowongankerja'])}}" class="text-blue">View More <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      
      @else
      <a href="{{route('user.berita.index', [$bahasa, 'lowongankerja'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      
      @endif
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      @if (Request::segment(1) == 'en')
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Scholarships</h4>
        <br>
      @else
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Informasi Beasiswa</h4>
        <br>
      @endif
      <?php $count = 0; ?>
      @foreach ($beasiswas as $beasiswa)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($beasiswa->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$beasiswa->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $beasiswa->kategori ,$beasiswa->slug])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$beasiswa->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      @if (Request::segment(1) == 'en')
      <a href="{{route('user.berita.index', [$bahasa, 'beasiswa'])}}" class="text-blue">View More <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      @else
      <a href="{{route('user.berita.index', [$bahasa, 'beasiswa'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      @endif
      
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      @if (Request::segment(1) == 'en')
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Book Recommendations</h4>
        <br>
      @else
        <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Rekomendasi Buku</h4>
        <br>  
      @endif
      <?php $count = 0; ?>
      @foreach ($bukurekomedasis as $bukurekomendasi)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($bukurekomendasi->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$bukurekomendasi->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $bukurekomendasi->kategori , $bukurekomendasi->slug])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$bukurekomendasi->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      @if (Request::segment(1) == 'en')
        <a href="{{route('user.berita.index', [$bahasa, 'bukurekomendasi'])}}" class="text-blue">View More <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      @else
        <a href="{{route('user.berita.index', [$bahasa, 'bukurekomendasi'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      @endif
      
      <div style="min-height: 10vh"></div>
    </div>
    
  </div>
</div>
@endsection
