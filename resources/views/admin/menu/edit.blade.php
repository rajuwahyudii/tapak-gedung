@extends('layouts.duacol')

@section('sidebar')
@include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5 mb-5">Edit Kategori</h1>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.menu.update', $menu->id)}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label for="menu">Kategori : </label>
                <input required type="text" value="{{$menu->menu}}" name="menu" class="form-control" id="menu" aria-describedby="menu" placeholder="Nama menu">
            </div>
            <div class="col-xl-2 mt-5">
                <label for="urutan">Urutan : </label>
                <input type="number" value="{{$menu->urutan}}" name="urutan" class="form-control" id="urutan" aria-describedby="urutan">
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection