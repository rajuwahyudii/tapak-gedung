@extends('layouts.user')

@section('content')

<div style="min-height: 5vh;"></div>
<div class="container">
    <h3 class="mt-5 font-1" style="font-weight:bolder;">
        @if (Request::segment(1) == 'en')
            @switch(Request::segment(3))
                @case('berita')
                    News
                    @break
                @case('pengumuman')
                    Announcements
                    @break
                @case('acara')
                    Events
                    @break
                @case('lowongankerja')
                    Job Vacancy
                    @break
                @case('beasiswa')
                    Scholarships
                    @break
                @case('bukurekomendasi')
                    Book Recommendations
                    @break
                @default
            @endswitch
        @else
            @switch(Request::segment(3))
                @case('berita')
                    Berita Umum
                    @break
                @case('pengumuman')
                    Pengumuman
                    @break
                @case('acara')
                    Acara
                    @break
                @case('lowongankerja')
                    Lowongan Kerja
                    @break
                @case('beasiswa')
                    Beasiswa
                    @break
                @case('bukurekomendasi')
                    Buku Rekomendasi
                    @break
                @default
            @endswitch
        @endif
        
    </h3>
    <hr class="mb-5">
    <div class="row">
        <div class="col-xl-9">
            <div class="container">
                <div class="row">
                    @foreach ($beritas as $berita)
                        {{-- <div class="card d-inline-block m-1" style="width: 18rem;">
                            <img class="card-img-top" width="285" height="180" src="{{ URL::asset('storage/berita') }}/{{$berita->thumbnail}}" alt="Card image cap">
                            <div class="card-body" height="150" >
                                <small>Penulis : {{$berita->penulis}}</small>
                                <br>
                                <small>Tanggal : {{ Str::limit($berita->created_at, 10) }} </small>
                                <hr>
                                <a href="{{route('user.berita.show', [$bahasa, $berita->judul])}}" class="text-dark">
                                    <h5 class="card-title">{{$berita->judul}}</h5>
                                </a>
                            </div>
                        </div> --}}
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
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center">
                <nav class="mt-5" aria-label="...">
                    <ul class="pagination">
                        {{-- {{$tikets->appends('tikets')->links("pagination::bootstrap-4")}} --}}
                        {{$beritas->links("pagination::bootstrap-4")}}
                        {{-- {!! $tikets->render() !!} --}}
                    </ul>
                </nav>
              </div>
        </div>
        <div class="col-xl-3">
            <div class="container">
                <div class="col-xl-12">
                        @if (Request::segment(1) == 'en')
                            <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >News Categories</h4>
                            <br>
                            <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>General News</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Announcements</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'acara'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Events</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'lowongankerja'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Job Vacancy</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'beasiswa'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Scholarships</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'bukurekomendasi'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Book Recommendations</b></small></h5>
                            </a>
                            <hr>
                        @else
                            <h4 style=" font-weight:bolder; border-bottom: 3px inset #FAD02C;" class="text-left d-inline-block font-1 mb-4" >Kategori Berita</h4>
                            <br>
                            <a href="{{route('user.berita.index', [$bahasa, 'berita'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Berita Umum</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'pengumuman'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Pengumuman</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'acara'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Acara / Event</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'lowongankerja'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Lowongan Kerja</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'beasiswa'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Beasiswa</b></small></h5>
                            </a>
                            <hr  >
                            <a href="{{route('user.berita.index', [$bahasa, 'bukurekomendasi'])}}" class="text-dark">
                                <h5 class="card-title"><small><b>Rekomendasi Buku</b></small></h5>
                            </a>
                            <hr>
                        @endif
                        
                    <div style="min-height: 10vh"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>




@endsection