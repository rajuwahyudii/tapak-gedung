@extends('layouts.satucol')

@section('sidebar')
    {{-- @include('inc.admin.') --}}
@endsection

@section('content')
<div>
    <h1>Slider</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.beranda.index', 'indonesia')}}">beranda</a>  / <a href="{{route('admin.slider.index')}}">slider</a> / create </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row mb-4">
            <div class="col-xl-6 mt-2 mb-5">
                <label>Bahasa : </label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="indonesia" name="bahasa" value="indonesia" checked>
                    <label for="indonesia" class="mr-5">Indonesia</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="english" name="bahasa" value="english">
                    <label for="english">English</label>
                </div>
            </div>
            <div class="col-xl-8">
                <label  for="gambar">Gambar Slider : </label>
                <input required name="gambar" type="file" class="form-control" id="gambar" placeholder="gambar">
            </div>
            
        </div>
        
        <div class="form-group row">
            
            <div class="col-xl-7 mb-4">
                <label for="title">Judul : </label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Masukan Judul">
                
            </div>
            <div class="col-xl-12 mb-4">
                <label for="caption">Caption : </label>
                <input type="text" name="caption" class="form-control" id="caption" aria-describedby="caption" placeholder="Masukan Caption">
                
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection
