@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Menu Tunggal</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.menutunggal.index')}}">menu tunggal</a> / <a href="{{route('admin.menutunggal.show',$menutunggal->id)}}">{{ strtolower($menutunggal->judul)}}</a> / edit</p>
    {{-- <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index', 'indonesia')}}">berita</a> / <a href="{{route('admin.berita.show', [$menutunggal->bahasa,$menutunggal->id])}}">{{ strtolower($menutunggal->judul)}}</a> / edit </p> --}}
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.menutunggal.update', $menutunggal->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            
            <div class="col-xl-8">
                <label for="judul">Judul : </label>
                <input type="text" value="{{$menutunggal->judul}}" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
            </div>
            <br>
            <div class="col-xl-4 mt-1">
                <label>Bahasa : </label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="indonesia" name="bahasa" value="indonesia" {{($menutunggal->bahasa == 'indonesia') ? 'checked' : ''}}>
                    <label for="indonesia" class="mr-5">Indonesia</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="english" name="bahasa" value="english" {{($menutunggal->bahasa == 'english') ? 'checked' : ''}}>
                    <label for="english">English</label>
                </div>
                
            </div>
        </div>
        <p class=" mt-5">Konten :</p>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           {{$menutunggal->konten}}
        </textarea>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection
