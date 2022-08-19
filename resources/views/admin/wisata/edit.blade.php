@extends('layouts.duacol')

@section('sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5 mb-5">Edit Objek Wisata</h1>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.wisata.update', $wisata->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-4">
            <div class="col-xl-12">
                <label for="thumbnail">Gambar Thumbnail : </label>
                <input name="thumbnail" type="file" class="form-control" id="thumbnail" placeholder="thumbnail">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label for="wisata">Wisata : </label>
                <input required type="text" value="{{$wisata->wisata}}" name="wisata" class="form-control" id="wisata" aria-describedby="wisata" placeholder="Nama wisata">
            </div>
            <div class="col-xl-2 mt-5">
                <label for="urutan">Urutan : </label>
                <input type="number" value="{{$wisata->urutan}}" name="urutan" class="form-control" id="urutan" aria-describedby="urutan">
            </div>
        </div>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           {{$wisata->konten}}
        </textarea>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection