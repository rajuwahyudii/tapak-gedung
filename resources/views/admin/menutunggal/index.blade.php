@extends('layouts.satucol')


@section('content')

<div class="row">
  <div class="col-xl-9">
    <h1 class="font-1 mt-5">Menu Tunggal</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / menu tunggal</p>
  </div>
</div>

<div class="bg-white p-5 shadow">
    @include('inc.messages')
    <a href="{{route('admin.menutunggal.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Menu Tunggal</button>
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
          @foreach ($menutunggals as $menutunggal)
            <tr>
              <td>{{$menutunggal->bahasa}}</td>
              <td>{{$menutunggal->judul}}</td>
              <td>{{$menutunggal->author}}</td>
              <td>{{$menutunggal->created_at}}</td>
              <td class="text-center">
                  <a href="{{route('admin.menutunggal.show', $menutunggal->id)}}">
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
              {{$menutunggals->links("pagination::bootstrap-4")}}
              {{-- {!! $tikets->render() !!} --}}
          </ul>
      </nav>
    </div>
</div>
@endsection