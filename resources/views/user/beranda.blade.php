@extends('layouts.user')


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
          <img style="height: 100vh;" class="d-block w-100" src="{{ URL::asset('storage/slider') }}/{{$slider->gambar}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block mb-5">
              <h1 class="font-1 display-4">{{$slider->title}}</h1>
              <p style="margin-bottom: 15em;">{{$slider->caption}}</p>
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

<div class="container-fluid mt-5 mb-5">
  <div class="container p-5">
    <div class="ml-5 mr-5 mb-3 text-left">
      <h1 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mb-3" >{{$berandakonten->judul}}</h1>
      <br>
      <p class="text-left d-inline-block font-1" >
        {{ Str::limit($berandakonten->konten, 500)  }}
      </p>
    </div>
    <div class="row ml-5 mr-5">
      <a href="{{$berandakonten->url}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
        <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat Selengkapnya</p>
      </a>
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container-fluid mb-5">
  <div class="container bg-light p-5">
    <div class="ml-5 mr-5 mb-3 text-right">
      <h1 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Terbaru dari Berita</h1>
      <br>
      <p class="text-left d-inline-block font-1" style=" font-w\eight:bold;" >Berita terbaru dari magister manajemen universitas bengkulu</p>
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
                  <a href="{{route('user.berita.show', [$bahasa, $berita->judul])}}" class="text-dark">
                      <h4 class="card-title"><small><b>{{$berita->judul}}</b></small></h4>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat berita lainnya</p>
        </a>
      </div>
      
      
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container-fluid bg-blue text-white mt-5 mb-5">
  <div class="container p-5">
    <div class="ml-5 mr-5 mb-3 text-center">
      <h1 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Pengumuman </h1>
      <br>
      <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Pengumuman terbaru dari magister manajemen universitas bengkulu</p>
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
                  <a href="{{route('user.berita.show', [$bahasa, $pengumuman->judul])}}" class="text-white">
                      <h4 class="card-title"><small><b>{{$pengumuman->judul}}</b></small></h4>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="" class="text-blue mb-5" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          <p class="text-left d-inline-block text-white font-1" style=" font-weight:bold;" >Lihat pengumuman lainnya</p>
        </a>
      </div>
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container-fluid mb-5">
  <div class="container p-5">
    <div class="ml-5 mr-5 mb-3 text-center">
      <h1 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Event</h1>
      <br>
      <p class="text-left d-inline-block font-1" style=" font-w\eight:bold;" >Event terbaru dari magister manajemen universitas bengkulu</p>
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
                  <a href="{{route('user.berita.show', [$bahasa, $event->judul])}}" class="text-dark">
                      <h4 class="card-title"><small><b>{{$event->judul}}</b></small></h4>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
          <p class="text-left d-inline-block font-1" style=" font-weight:bold;" >Lihat event lainnya</p>
        </a>
      </div>
      
      
    </div>
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container">
  <div class="row p-5">
    <div class="col-xl-4">
      <h3 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Lowongan Kerja</h3>
      <br>
      <?php $count = 0; ?>
      @foreach ($lowongankerjas as $lowongankerja)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($lowongankerja->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$lowongankerja->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $lowongankerja->judul])}}" class="text-dark">
                    <h4 class="card-title"><small><b>{{$lowongankerja->judul}}</b></small></h4>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      <h3 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Informasi Beasiswa</h3>
      <br>
      <?php $count = 0; ?>
      @foreach ($beasiswas as $beasiswa)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($beasiswa->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$beasiswa->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $beasiswa->judul])}}" class="text-dark">
                    <h4 class="card-title"><small><b>{{$beasiswa->judul}}</b></small></h4>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      <h3 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Rekomendasi Buku</h3>
      <br>
      <?php $count = 0; ?>
      @foreach ($bukurekomedasis as $bukurekomendasi)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($bukurekomendasi->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$bukurekomendasi->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $bukurekomendasi->judul])}}" class="text-dark">
                    <h4 class="card-title"><small><b>{{$bukurekomendasi->judul}}</b></small></h4>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    
  </div>
</div>

<div style="min-height: 10vh"></div>

<div class="container-fluid bg-blue text-white mt-5">
  <div class="container p-5">
    <div class="row">
      <div class="col-xl-4">
        <img src="{{asset('logo/logo.png')}}" width="80" alt=""> <br> <hr>
        <b>
          UNIVERSITAS BENGKULU <br>
          FAKULTAS EKONOMI DAN BISNIS <br>
          MAGISTER MANAJEMEN
        </b>
        <hr>
        <p>Jl. W.R. Supratman Kandang Limun</p>
        <p>Bengkulu 38371 A</p>
        <p>Telp : (0736) 20301</p>
        <p>Sumatera – INDONESIA</p>
        
      </div>
      <div class="col-xl-4 mt-5">
        <h5>TAUTAN TERKAIT</h5>
        <hr>
        <a href="" class="text-white">Universitas Bengkulu</a>
        <br>
        <a href="" class="text-white">Fakultas Ekonomi Dan Bisnis</a>
        <br>
        <a href="" class="text-white">Perpustakaan UNIB</a>
      </div>
      <div class="col-xl-4 mt-5">
        <h5>STATISTIK PENGUNJUNG</h5>
        <hr>
      </div>
    </div>
    
  </div>
</div>

@endsection
