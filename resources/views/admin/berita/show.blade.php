@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Berita</h1> 
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('user.berita.index', [$bahasa, $kategori])}}">{{$kategori}}</a> / {{ strtolower($berita->judul)}}</p>
</div>
<div class="bg-white p-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <h5>{{$berita->judul}}</h5>
                <small>Penulis : {{$berita->penulis}} | Di buat pada : {{$berita->created_at}}</small>
            </div>
            <div class="col-xl-5 text-left">
                <a href="{{route('admin.berita.edit', [$berita->bahasa, $berita->kategori, $berita->id])}}">
                    <button class="btn btn-success mt-3 pr-5 pl-5"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <form class="d-inline" action="{{route('admin.berita.destroy', $berita->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger mt-3"> <i class="fas fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
    
    <hr class="mb-5">
    <div>
        <img src=" {{ URL::asset('storage/berita') }}/{{$berita->thumbnail}} " alt="thumbnail" class="img-fluid">
    </div>  
    <hr>
    {!!$berita->konten!!}
</div>
@endsection