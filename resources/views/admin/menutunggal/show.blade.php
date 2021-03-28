@extends('layouts.satucol')


@section('content')
<div>
    <h1>Menu Tunggal</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.menutunggal.index')}}">menu tunggal</a> / {{ strtolower($menutunggal->judul)}}</p>
</div>
<div class="bg-white p-5 shadow">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <h5>{{$menutunggal->judul}}</h5>
                <small>Penulis : {{$menutunggal->author}} | Di buat pada : {{$menutunggal->created_at}}</small>
            </div>
            <div class="col-xl-5 text-left">
                <a href="{{route('admin.menutunggal.edit', $menutunggal->id)}}">
                    <button class="btn btn-success mt-3 pr-5 pl-5 mr-1"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <form class="d-inline" action="{{route('admin.menutunggal.destroy', $menutunggal->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger mt-3"> <i class="fas fa-trash"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    {!!$menutunggal->konten!!}
</div>
@endsection