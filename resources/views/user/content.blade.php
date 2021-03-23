@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-9 pt-5 pb-5">
            <h3 class="mt-5 font-1" style="font-weight: bolder;">{{$content->judul}}</h3>
            <hr class="mb-5">
            {!! $content->kontent !!}
        </div>
        <div class="col-xl-3 mt-5 pt-5 pb-5 pl-4 pr-4">
            <div class="col-xl-12">
                @if (Request::segment(1) == 'en')
                    
                <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Announcements</h4>
                @else
                <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Pengumuman</h4>
                    
                @endif
                <br>
                <?php $count = 0; ?>
                @foreach ($pengumumans as $pengumuman)
                    <?php if($count == 2) break; ?>
                          <small>Tanggal : {{ Str::limit($pengumuman->created_at, 10) }} | </small>
                          <small><i class="fas fa-flag"></i> {{$pengumuman->kategori}} </small>
                          <a href="{{route('user.berita.show', [$bahasa, $pengumuman->kategori ,$pengumuman->judul])}}" class="text-dark">
                              <h5 class="card-title"><small><b>{{$pengumuman->judul}}</b></small></h5>
                          </a>
                    <?php $count++; ?>
                    <hr  >
                @endforeach
                @if (Request::segment(1) == 'en')
                    
                <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-blue">View More <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
                @else
                <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
                    
                @endif
                <div style="min-height: 10vh"></div>
            </div>
            <div class="col-xl-12">
                @if (Request::segment(1) == 'en')
                    
                <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >News</h4>
                @else
                <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Berita</h4>
                    
                @endif
                <br>
                <?php $count = 0; ?>
                @foreach ($beritas as $berita)
                    <?php if($count == 2) break; ?>
                            <small>Tanggal : {{ Str::limit($berita->created_at, 10) }} | </small>
                            <small><i class="fas fa-flag"></i> {{$berita->kategori}} </small>
                            <a href="{{route('user.berita.show', [$bahasa, $berita->kategori , $berita->judul])}}" class="text-dark">
                                <h5 class="card-title"><small><b>{{$berita->judul}}</b></small></h5>
                            </a>
                    <?php $count++; ?>
                    <hr  >
                @endforeach
                @if (Request::segment(1) == 'en')
                    
                <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-blue">View More <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
                @else
                <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-blue">Lihat selengkapnya <i class="fas fa-arrow-right ml-2 mt-2"></i></a>
                    
                @endif
                <div style="min-height: 10vh"></div>
            </div>
        </div>
    </div>
</div>
    
@endsection