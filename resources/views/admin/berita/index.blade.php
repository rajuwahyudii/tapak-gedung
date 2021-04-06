@extends('layouts.duacol')

@section('sidebar')
  @include('inc.admin.berita_sidebar')
@endsection

@section('content')

  <div class="row">
    <div class="col-xl-8">
      @if ( empty(Request::segment(4)))
      <h1 class="font-1 mt-5">Berita</h1>
      @else
      <h1 class="font-1 mt-5">
        @switch(Request::segment(4))
            @case('berita')
                <h1 class="font-1 mt-5">Berita</h1>
                @break
            @case('pengumuman')
                <h1 class="font-1 mt-5">Pengumuman</h1>
                @break
            @case('acara')
                <h1 class="font-1 mt-5">Acara</h1>
                @break
            @case('lowongankerja')
                <h1 class="font-1 mt-5">Lowongan Kerja</h1>
                @break
            @case('beasiswa')
                <h1 class="font-1 mt-5">Beasiswa</h1>
                @break
            @case('bukurekomendasi')
                <h1 class="font-1 mt-5">Rekomendasi Buku</h1>
                @break
            @default
                
        @endswitch
        </h1>
      @endif
      
      <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index', [$bahasa, 'berita'] )}}">{{Request::segment(4)}}</a></p>
    </div>
    <div class="col-xl-4 mt-5 pl-5">
      @if (Request::segment(3) == 'english')  
        <a href="{{route('admin.berita.index', ['indonesia', 'berita'] )}}">
          <button type="button" class="btn mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
        </a>
        <a href="{{route('admin.berita.index', ['english','berita'] )}}">
            <button type="button" class="btn bg-blue text-white mb-3"><i class="fas fa-book"></i> English</button>
        </a>
      @else
        <a href="{{route('admin.berita.index', ['indonesia', 'berita'] )}}">
          <button type="button" class="btn bg-blue text-white mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
        </a>
        <a href="{{route('admin.berita.index', ['english','berita'] )}}">
            <button type="button" class="btn mb-3"><i class="fas fa-book"></i> English</button>
        </a>
      @endif
      
    </div>
  </div>

  <div class="bg-white p-5 shadow">
      @include('inc.messages')
      <a href="{{route('admin.berita.create', [$bahasa, 'berita'])}}">
          <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Berita</button>
      </a>
      <div style="overflow-x: scroll;">
        <table class="table bg-white mb-5">
            <thead class="bg-blue text-white">
              <tr>
                <th scope="col">Bahasa</th>
                <th scope="col">Kategori</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal dibuat </th>
                <th scope="col" class="text-center">Aksi </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($beritas as $berita)
                <tr>
                  <td>{{$berita->bahasa}}</td>
                  <td>{{$berita->kategori}}</td>
                  <td>{{$berita->judul}}</td>
                  <td>{{$berita->created_at}}</td>
                  <td>
                      <a href="{{route('admin.berita.show', [$berita->bahasa, $berita->kategori ,$berita->id])}}">
                        <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                      </a>
                  </td>
                </tr>
              @endforeach
  
            </tbody>
        </table>  
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
@endsection