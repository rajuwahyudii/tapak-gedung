@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1>Menu Tunggal</h1>
    {{-- <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.menutunggal.index', 'indonesia')}}">berita</a> / <a href="{{route('admin.menutunggal.index', 'indonesia')}}"> {{ strtolower($menutunggal->judul)}}</a></p> --}}
</div>
<div class="bg-white p-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <h5>{{$menutunggal->judul}}</h5>
                <small>Penulis : {{$menutunggal->author}} | Di buat pada : {{$menutunggal->created_at}}</small>
            </div>
            <div class="col-xl-3 text-left">
                <a href="{{route('admin.menutunggal.edit', $menutunggal->id)}}">
                    <button class="btn btn-success mt-3"> <i class="fas fa-pen"></i> Edit</button>
                </a>
                <a href="#">
                    <button class="btn btn-primary mt-3"> <i class="fas fa-eye"></i> Preview</button>
                </a>
            </div>
            <div class="col-xl-2 text-right">
                <form action="{{route('admin.menutunggal.destroy', $menutunggal->id)}}" method="POST">
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