@extends('layouts.master')

@section('sidebar')
  @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1>Berita</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index')}}">berita</a></p>
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
            <th scope="col">Aksi </th>
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
                  <a href="{{route('admin.berita.show', $berita->judul )}}">
                    <button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button>
                  </a>
              </td>
            </tr>
          @endforeach

        </tbody>
    </table>  
</div>
@endsection