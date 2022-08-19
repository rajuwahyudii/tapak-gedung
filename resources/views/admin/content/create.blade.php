@extends('layouts.duacol')

@section('sidebar')
    @include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Buat Post</h1>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.content.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <div class="col-xl-12 mb-5">
                <label for="judul">Kategori</label>
                <br>
                @foreach ($menus as $menu)
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="{{$menu->menu}}" name="menu_id" value="{{$menu->id}}" checked>
                        <label for="{{$menu->menu}}" class="mr-5">{{$menu->menu}}</label>
                    </div>
                @endforeach
            </div>
            <div class="col-xl-12 mb-5">
                <label for="judul">Wisata</label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="kosong" name="wisata_id" value="" checked>
                    <label for="kosong" class="mr-5">Tidak Ada</label>
                </div>
                @foreach ($wisatas as $wisata)
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="{{$wisata->wisata}}" name="wisata_id" value="{{$wisata->id}}">
                        <label for="{{$wisata->wisata}}" class="mr-5">{{$wisata->wisata}}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group row mb-4">
                <div class="col-xl-12">
                    <label for="thumbnail">Gambar Thumbnail : </label>
                    <input name="thumbnail" type="file" class="form-control" id="thumbnail" placeholder="thumbnail">
                </div>
            </div>
            <div class="col-xl-7">
                <label for="judul">Judul : </label>
                <input required type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
                
            </div>
        </div>
        <p>Konten :</p>
        <textarea name="kontent" class="form-control" id="summernote" cols="30" rows="10">
           
        </textarea>
        
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection