@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.berita_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Berita</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index', 'indonesia')}}">berita</a>  / create </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.berita.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-4">
            <div class="col-xl-4">
                <label for="thumbnail">Gambar Thumbnail : </label>
                <input name="thumbnail" type="file" class="form-control" id="thumbnail" placeholder="thumbnail">
            </div>
        </div>
        
        <div class="form-group row">
            
            <div class="col-xl-8">
                <label for="judul">Judul : </label>
                <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
                
            </div>
            <br>
            <div class="col-xl-12 mt-5">
                <label>Kategori : </label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="berita" name="kategori" value="berita" checked>
                    <label for="berita" class="mr-5">Berita Umum</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="pengumuman" name="kategori" value="pengumuman">
                    <label for="pengumuman">Pengumuman</label>
                </div>
                <div class="d-inline-block mt-2 ml-5"> 
                    <input type="radio" id="acara" name="kategori" value="acara">
                    <label for="acara">Acara</label>
                </div>
                <div class="d-inline-block mt-2 ml-5"> 
                    <input type="radio" id="beasiswa" name="kategori" value="beasiswa">
                    <label for="beasiswa">Beasiswa</label>
                </div>
                <div class="d-inline-block mt-2 ml-5"> 
                    <input type="radio" id="lowongankerja" name="kategori" value="lowongankerja">
                    <label for="lowongankerja">Lowongan Kerja</label>
                </div>
                <div class="d-inline-block mt-2 ml-5"> 
                    <input type="radio" id="bukurekomendasi" name="kategori" value="bukurekomendasi">
                    <label for="bukurekomendasi">Buku Rekomendasi</label>
                </div>
            </div>
            <div class="col-xl-6 mt-5">
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
        <p class=" mt-5">Konten :</p>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           
        </textarea>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection