@extends('layouts.duacol')

@section('sidebar')
    @include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1>Menu</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.menu.index')}}">menu</a>  / create </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.menu.store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label for="menu">Menu : </label>
                <input type="text" name="menu" class="form-control" id="menu" aria-describedby="menu" placeholder="Nama menu">
            </div>
            <div class="col-xl-2 mt-5">
                <label for="urutan">Urutan : </label>
                <input type="number" name="urutan" class="form-control" id="urutan" aria-describedby="urutan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-4 mt-5">
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
            <div class="col-xl-4 mt-5">
                <label>Status : </label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="Aktif" name="status" value="aktif" checked>
                    <label for="Aktif" class="mr-5">Aktif</label>
                </div>
                <div class="d-inline-block mt-2"> 
                    <input type="radio" id="Nonaktif" name="status" value="nonaktif">
                    <label for="Nonaktif">Nonaktif</label>
                </div>
                
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection