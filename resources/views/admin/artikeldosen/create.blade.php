@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">Penelitian</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.artikeldosen.index', 'indonesia')}}">penelitian</a> / create</p>
    {{-- <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.berita.index', 'indonesia')}}">berita</a>  / create </p> --}}
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.artikeldosen.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-1 mb-4">
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
            <div class="col-xl-12 mt-1 mb-4">
                <label>Kategori : </label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="artikeldosen" name="kategori" value="artikeldosen" checked>
                    <label for="artikeldosen" class="mr-5">Artikel dosen</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="tesis" name="kategori" value="tesis">
                    <label for="tesis" class="mr-5">Tesis</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="disertasi" name="kategori" value="disertasi">
                    <label for="disertasi" class="mr-5">Disertasi</label>
                </div>
                
            </div>
            <div class="col-xl-8 mb-4">
                <label for="judul">Judul : </label>
                <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
                <small class="form-text text-muted">Judul tidak boleh mengandung garis miring atau slash ( / )</small>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mt-3">
                <label for="penulis">Nama Penulis : </label>
                <input type="text" name="penulis" class="form-control" id="penulis" aria-describedby="penulis" placeholder="Masukan Nama penulis">
            </div>
            <br>
            <div class="col-xl-3 mt-3">
                <label for="penulis">Tahun : </label>
                <input type="text" name="tahun" class="form-control" id="tahun" aria-describedby="tahun" placeholder="Masukan Tahun">
            </div>
        </div>
        <p class=" mt-5">Konten :</p>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           
        </textarea>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection