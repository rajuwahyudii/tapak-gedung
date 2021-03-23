@extends('layouts.satucol')

@section('sidebar')
   
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Beranda Konten</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.beranda.index', 'indonesia')}}">beranda</a> / konten / edit </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.beranda.konten.update', $berandakonten->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group row mb-4">
            <div class="col-xl-6 mt-2 mb-5">
                <label>Bahasa : </label>
                <br>
                @if ($berandakonten->bahasa == 'english')
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="indonesia" name="bahasa" value="indonesia">
                        <label for="indonesia" class="mr-5">Indonesia</label>
                    </div>
                    <div class="d-inline-block mt-2"> 
                        <input type="radio" id="english" name="bahasa" value="english" checked>
                        <label for="english">English</label>
                    </div>
                @else
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="indonesia" name="bahasa" value="indonesia" checked>
                        <label for="indonesia" class="mr-5">Indonesia</label>
                    </div>
                    <div class="d-inline-block mt-2"> 
                        <input type="radio" id="english" name="bahasa" value="english">
                        <label for="english">English</label>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="form-group row">
            
            <div class="col-xl-7 mb-4">
                <label for="title">Judul : </label>
                <input value="{{$berandakonten->judul}}" type="text" name="judul" class="form-control" id="title" aria-describedby="title" placeholder="Masukan Judul">
                
            </div>
            <div class="col-xl-12 mb-4">
                <label for="konten">konten : </label>
                <textarea class="form-control" name="konten" id="konten" cols="30" rows="10">
                    {{ $berandakonten->konten }}
                </textarea>
            </div>
            <div class="col-xl-12 mb-4">
                <label for="url">link : </label>
                <input value="{{$berandakonten->url}}" type="text" name="url" class="form-control" id="url" aria-describedby="url" placeholder="Masukan url">
                
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection