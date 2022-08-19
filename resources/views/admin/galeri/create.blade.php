@extends('layouts.satucol')


@section('sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Tambah Gambar</h1>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.galeri.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-4">
            <div class="col-xl-12">
                <label for="gambar">Gambar Galeri : </label>
                <input name="gambar" type="file" class="form-control" id="gambar" placeholder="thumbnail">
                <input name="wisata_id" type="hidden" value="{{$wisata->id}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection