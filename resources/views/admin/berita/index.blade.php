@extends('layouts.satucol')

@section('sidebar')
  @include('inc.admin.berita_sidebar')
@endsection

@section('content')

<div class="row">
  <div class="col-xl-9">
    <h1>Berita</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index','indonesia')}}">berita</a></p>
  </div>
  <div class="col-xl-3 mt-5 pl-5">
    @if (Request::segment(3) == 'english')  
      <a href="{{route('admin.berita.index', 'indonesia')}}">
        <button type="button" class="btn mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
      </a>
      <a href="{{route('admin.berita.index', 'english')}}">
          <button type="button" class="btn btn-dark mb-3"><i class="fas fa-book"></i> English</button>
      </a>
    @else
      <a href="{{route('admin.berita.index', 'indonesia')}}">
        <button type="button" class="btn btn-dark mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
      </a>
      <a href="{{route('admin.berita.index', 'english')}}">
          <button type="button" class="btn mb-3"><i class="fas fa-book"></i> English</button>
      </a>
    @endif
    
  </div>
</div>

<div class="bg-white p-5">
    @include('inc.messages')
    <a href="{{route('admin.berita.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Berita</button>
    </a>
    <table class="table bg-white mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Bahasa</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tanggal dibuat </th>
            <th scope="col" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($beritas as $berita)
            <tr>
              <td>{{$berita->bahasa}}</td>
              <td>{{$berita->judul}}</td>
              <td>{{$berita->penulis}}</td>
              <td>{{$berita->created_at}}</td>
              <td>
                  <a href="{{route('admin.berita.show', [$berita->bahasa,$berita->id])}}">
                    <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                  </a>
              </td>
            </tr>
          @endforeach

        </tbody>
    </table>  
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