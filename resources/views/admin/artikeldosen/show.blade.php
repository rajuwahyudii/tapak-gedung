@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">Artikel Dosen</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.artikeldosen.index', 'indonesia')}}">artikel dosen</a> / {{ strtolower($artikeldosen->judul)}}</p>
    {{-- <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.artikeldosen.index', 'indonesia')}}">berita</a> / <a href="{{route('admin.artikeldosen.index', 'indonesia')}}"> {{ strtolower($artikeldosen->judul)}}</a></p> --}}
</div>
<div class="bg-white p-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <h5 >{{$artikeldosen->judul}}</h5>
                <small>Penulis : {{$artikeldosen->author}} | Di buat pada : {{$artikeldosen->created_at}}</small>
            </div>
            <div class="col-xl-3 text-left">
                <a href="{{route('admin.artikeldosen.edit', [$artikeldosen->bahasa, $artikeldosen->id])}}">
                    <button class="btn btn-success mt-3"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <a href="{{route('user.artikeldosen.show', [$artikeldosen->bahasa,$artikeldosen->judul])}}">
                    <button class="btn btn-primary mt-3"> <i class="fas fa-eye"></i> Preview</button>
                </a>
            </div>
            <div class="col-xl-2 text-right">
                <form action="{{route('admin.artikeldosen.destroy', $artikeldosen->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger mt-3"> <i class="fas fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    {!!$artikeldosen->konten!!}
</div>
@endsection