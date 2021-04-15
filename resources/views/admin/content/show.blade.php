@extends('layouts.duacol')

@section('sidebar')
    @include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Konten</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index', [$content->bahasa,'daftar-content'])}}">konten</a> / <a href="{{route('admin.content.index', [$content->bahasa,$content->menu_id])}}">{{$content->menu}}</a> / {{ strtolower($content->judul)}} </p>
</div>
<div class="bg-white p-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <h5>{{$content->judul}}</h5>
                <small>Penulis : {{$content->author}} | Di buat pada : {{$content->created_at}}</small>
            </div>
            <div class="col-xl-5 text-left">
                <a href="{{route('admin.content.edit', [ $content->bahasa,$content->menu, $content->id])}}">
                    <button class="btn btn-success mt-3 pl-5 pr-5 ml-1"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <form class="d-inline" action="{{route('admin.content.destroy', $content->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger mt-3"> <i class="fas fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
    
    <hr class="mb-5">
    <div>
        {!!$content->kontent!!}
    </div>
</div>
@endsection