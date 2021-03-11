@extends('layouts.master')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1>Berita</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index')}}">berita</a>  / create </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.berita.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-4">
            <div class="col-xl-4">
                <label for="thumbnail">Gambar Thumbnail : </label>
                <input name="thumbnail" type="file" class="form-control" id="thumbnail" placeholder="thumbnail">
            </div>
        </div>
        
        <div class="form-group row">
            
            <div class="col-xl-7">
                <label for="judul">Judul : </label>
                <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
                
            </div>
            <div class="col-xl-4 mt-2">
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
        </div>
        <p>Konten :</p>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           
        </textarea>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection