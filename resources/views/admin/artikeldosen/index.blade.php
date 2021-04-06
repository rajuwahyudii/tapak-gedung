@extends('layouts.satucol')

@section('style')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl-9">
    <h1 class="font-1 mt-5">Penelitian</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / penelitian </p>
    {{-- <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index','indonesia')}}">berita</a></p> --}}
  </div>
  <div class="col-xl-3 mt-5 pl-5">
    @if (Request::segment(3) == 'english')  
      <a href="{{route('admin.artikeldosen.index', 'indonesia')}}">
        <button type="button" class="btn mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
      </a>
      <a href="{{route('admin.artikeldosen.index', 'english')}}">
          <button type="button" class="btn bg-blue text-white mb-3"><i class="fas fa-book"></i> English</button>
      </a>
    @else
      <a href="{{route('admin.artikeldosen.index', 'indonesia')}}">
        <button type="button" class="btn bg-blue text-white mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
      </a>
      <a href="{{route('admin.artikeldosen.index', 'english')}}">
          <button type="button" class="btn mb-3"><i class="fas fa-book"></i> English</button>
      </a>
    @endif
    
  </div>
</div>

<div class="bg-white p-5 shadow mb-2">
    @include('inc.messages')
    <a href="{{route('admin.artikeldosen.create', $bahasa)}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Penelitian</button>
    </a>
</div>
<div class="bg-white p-5 shadow mb-2">
  <div style="overflow-x: scroll;">
    <div class="row">
      <div class="col-xl-8">
        <h5> <b>Artikel Dosen</b></h5>
      </div>  
    </div>
    <hr>
    <table class="table bg-white mb-5 mt-5" id="artikeldosen" >
        <thead class="bg-blue text-white">
          <tr>
            <th scope="col">Bahasa</th>
            <th scope="col">Kategori</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun</th>  
            <th scope="col">Dibuat</th>
            <th scope="col" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($artikeldosens as $artikeldosen)
            <tr>
              <td>{{$artikeldosen->bahasa}}</td>
              <td>{{$artikeldosen->kategori}}</td>
              <td>{{$artikeldosen->judul}}</td>
              <td>{{$artikeldosen->author}}</td>
              <td>{{$artikeldosen->tahun}}</td>
              <td>{{$artikeldosen->created_at}}</td>
              <td class="text-center">
                  <a href="{{route('admin.artikeldosen.show', [$bahasa, $artikeldosen->id])}}">
                    <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                  </a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>

<div class="bg-white p-5 shadow mb-2">
  
  <div class="row">
    <div class="col-xl-8">
      <h5> <b>Tesis</b></h5>
    </div>
  </div>
  <hr>
  <div style="overflow-x: scroll;">
    <table class="table bg-white mb-5 mt-5" id="tesis" >
        <thead class="bg-blue text-white">
          <tr>
            <th scope="col">Bahasa</th>
            <th scope="col">Kategori</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun</th>  
            <th scope="col">Dibuat</th>
            <th scope="col" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tesises as $tesis)
            <tr>
              <td>{{$tesis->bahasa}}</td>
              <td>{{$tesis->kategori}}</td>
              <td>{{$tesis->judul}}</td>
              <td>{{$tesis->author}}</td>
              <td>{{$tesis->tahun}}</td>
              <td>{{$tesis->created_at}}</td>
              <td class="text-center">
                  <a href="{{route('admin.artikeldosen.show', [$bahasa, $tesis->id])}}">
                    <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                  </a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>  
  </div>
  
</div>

<div class="bg-white p-5 shadow mb-2">
 
  <div class="row">
    <div class="col-xl-8">
      <h5> <b>Disertasi</b></h5>
    </div>
  </div>
  <hr>
  <div style="overflow-x: scroll;">
    <table class="table bg-white mb-5 mt-5" id="disertasi" >
        <thead class="bg-blue text-white">
          <tr>
            <th scope="col">Bahasa</th>
            <th scope="col">Kategori</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun</th>  
            <th scope="col">Dibuat</th>
            <th scope="col" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($disertasis as $disertasi)
            <tr>
              <td>{{$disertasi->bahasa}}</td>
              <td>{{$disertasi->kategori}}</td>
              <td>{{$disertasi->judul}}</td>
              <td>{{$disertasi->author}}</td>
              <td>{{$disertasi->tahun}}</td>
              <td>{{$disertasi->created_at}}</td>
              <td class="text-center">
                  <a href="{{route('admin.artikeldosen.show', [$bahasa, $disertasi->id])}}">
                    <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                  </a>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>  
  </div>
  
</div>
@endsection

@section('script')

<script>
  $(document).ready( function () {
      $.noConflict();
      $('#artikeldosen').DataTable();
      $('#tesis').DataTable();
      $('#disertasi').DataTable();
  } );
</script>
@endsection