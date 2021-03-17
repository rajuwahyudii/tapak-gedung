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
              <h3 class="font-1 display-4">{{$slider->title}}</h3>
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
      <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mb-3" >{{$berandakonten->judul}}</h3>
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
    <div class="ml-5 mr-5 mb-3 text-left">
      <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Terbaru dari Berita</h3>
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
                  <a href="{{route('user.berita.show', [$bahasa, $berita->kategori , $berita->judul])}}" class="text-dark">
                      <h5 class="card-title"><small><b>{{$berita->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
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
      <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1 mt-5" >Pengumuman </h3>
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
                  <a href="{{route('user.berita.show', [$bahasa, $pengumuman->kategori , $pengumuman->judul])}}" class="text-white">
                      <h5 class="card-title"><small><b>{{$pengumuman->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-blue mb-5" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
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
      <h3 style=" font-weight:bolder;" class="text-left d-inline-block font-1" >Event</h3>
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
                  <a href="{{route('user.berita.show', [$bahasa, $event->kategori , $event->judul])}}" class="text-dark">
                      <h5 class="card-title"><small><b>{{$event->judul}}</b></small></h5>
                  </a>
              </div>
          </div>
          <?php $count++; ?>
      @endforeach
      <div class="col-xl-12 text-center">
        <a href="{{route('user.berita.index', [$bahasa, 'acara'])}}" class="text-blue" style="border-bottom: 3px inset #FAD02C; text-decoration: none;">
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
      <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Lowongan Kerja</h4>
      <br>
      <?php $count = 0; ?>
      @foreach ($lowongankerjas as $lowongankerja)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($lowongankerja->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$lowongankerja->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $lowongankerja->kategori , $lowongankerja->judul])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$lowongankerja->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="{{route('user.berita.index', [$bahasa, 'lowongankerja'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Informasi Beasiswa</h4>
      <br>
      <?php $count = 0; ?>
      @foreach ($beasiswas as $beasiswa)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($beasiswa->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$beasiswa->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $beasiswa->kategori ,$beasiswa->judul])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$beasiswa->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="{{route('user.berita.index', [$bahasa, 'beasiswa'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    <div class="col-xl-4">
      <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Rekomendasi Buku</h4>
      <br>
      <?php $count = 0; ?>
      @foreach ($bukurekomedasis as $bukurekomendasi)
          <?php if($count == 2) break; ?>
                <small>Tanggal : {{ Str::limit($bukurekomendasi->created_at, 10) }} | </small>
                <small><i class="fas fa-flag"></i> {{$bukurekomendasi->kategori}} </small>
                <a href="{{route('user.berita.show', [$bahasa, $bukurekomendasi->kategori , $bukurekomendasi->judul])}}" class="text-dark">
                    <h5 class="card-title"><small><b>{{$bukurekomendasi->judul}}</b></small></h5>
                </a>
          <?php $count++; ?>
          <hr  >
      @endforeach
      <a href="{{route('user.berita.index', [$bahasa, 'bukurekomendasi'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
      <div style="min-height: 10vh"></div>
    </div>
    
  </div>
</div>




@endsection
