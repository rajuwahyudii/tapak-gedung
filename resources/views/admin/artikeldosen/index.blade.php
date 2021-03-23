@extends('layouts.satucol')


@section('content')

<div class="row">
  <div class="col-xl-9">
    <h1 class="font-1 mt-5">Artikel Dosen</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / artikel dosen </p>
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

<div class="bg-white p-5 shadow">
    @include('inc.messages')
    <a href="{{route('admin.artikeldosen.create', $bahasa)}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Artikel Dosen</button>
    </a>
    <table class="table bg-white mb-5">
        <thead class="bg-blue text-white">
          <tr>
            <th scope="col">Bahasa</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tanggal dibuat </th>
            <th scope="col" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($artikeldosens as $artikeldosen)
            <tr>
              <td>{{$artikeldosen->bahasa}}</td>
              <td>{{$artikeldosen->judul}}</td>
              <td>{{$artikeldosen->author}}</td>
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
    <div class="row justify-content-center">
      <nav class="mt-5" aria-label="...">
          <ul class="pagination">
              {{-- {{$tikets->appends('tikets')->links("pagination::bootstrap-4")}} --}}
              {{$artikeldosens->links("pagination::bootstrap-4")}}
              {{-- {!! $tikets->render() !!} --}}
          </ul>
      </nav>
    </div>
</div>
@endsection
