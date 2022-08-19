@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">{{$wisata->wisata}}</h1>
</div>
<div class="bg-white p-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <small>Di buat pada : {{$wisata->created_at}}</small>
            </div>
            <div class="col-xl-6 text-right">
                <div class="row justify-content-right">
                    <a href="{{route('admin.galeri.index', $wisata->id)}}">
                        <button class="btn btn-success mt-3 ml-1 pl-5 pr-5"> <i class="fas fa-plus"></i> Galeri</button>
                    </a>
                    <a href="{{route('admin.wisata.edit', $wisata->wisata)}}">
                        <button class="btn btn-primary mt-3 ml-1 pl-5 pr-5"> <i class="fas fa-pen"></i> Edit</button>
                    </a>
                    <form class="d-inline" action="{{route('admin.wisata.destroy', $wisata->id)}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-outline-danger mt-3 ml-3"> <i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container p-5">
        Thumbnail : 
        <div class="row">
            <div class="col-8">
                <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$wisata->thumbnail}}" alt="">
            </div>
        </div>
    </div>
    <hr class="mb-5">
    <div>
        {!!$wisata->konten!!}
    </div>
    <hr>
    <section id="portfolio" class="portfoio mt-5 mb-5">
        <div class="container" data-aos="fade-up">
    
          <div class="main_title" id="galeri">
            <h1>Galeri Wisata</h1>
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
        </div>
      </section>
</div>
@endsection