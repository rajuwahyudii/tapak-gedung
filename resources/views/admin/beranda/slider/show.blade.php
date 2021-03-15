@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1>Berita</h1> 
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index')}}">berita</a> / <a href="{{route('admin.berita.index')}}"> {{ strtolower($berita->judul)}}</a></p>
</div>
<div class="bg-white p-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <h5>{{$berita->judul}}</h5>
                <small>Penulis : {{$berita->penulis}} | Di buat pada : {{$berita->created_at}}</small>
            </div>
            <div class="col-xl-4 text-left">
                <a href="{{route('admin.berita.edit', $berita->id)}}">
                    <button class="btn btn-success mt-3"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <a href="#">
                    <button class="btn btn-primary mt-3"> <i class="fas fa-eye"></i> Preview</button>
                </a>
            </div>
            <div class="col-xl-2 text-right">
                <form action="{{route('admin.berita.destroy', $berita->id)}}" method="POST">
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