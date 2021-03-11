@extends('layouts.master')

@section('sidebar')
  @include('inc.admin.sidebar')
@endsection

@section('content')
<div>
    <h1>Content</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index', 'daftar-content')}}">content</a>  / {{Request::segment(3)}}</p>
</div>
<div class="bg-white p-5">
    @include('inc.messages')

    <a href="{{route('admin.content.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Konten</button>
    </a>
    <table class="table bg-white mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Urutan</th>
            <th scope="col">Menu</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal Dibuat </th>
            <th scope="col">Penulis </th>
            <th scope="col">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contents as $content)
            <tr>
              <td>{{$content->urutan}}</td>
              <td>{{$content->menu}}</td>
              <td>{{$content->judul}}</td>
              <td>{{$content->created_at}}</td>
              <td>{{$content->author}}</td>
              <td>
                  <a href="{{route('admin.content.show', [$content->menu,$content->judul] )}}"><button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Konten </button></a>
              </td>
            </tr>
          @endforeach

        </tbody>
    </table>  
</div>
@endsection
