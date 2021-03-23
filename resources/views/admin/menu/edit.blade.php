@extends('layouts.duacol')

@section('sidebar')
@include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Menu</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.menu.index')}}">menu</a> / <a href="{{route('admin.menu.edit', $menu->menu)}}">{{ strtolower($menu->menu)}}</a> / edit </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.menu.update', $menu->id)}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label for="menu">Menu : </label>
                <input type="text" value="{{$menu->menu}}" name="menu" class="form-control" id="menu" aria-describedby="menu" placeholder="Nama menu">
            </div>
            <div class="col-xl-2 mt-5">
                <label for="urutan">Urutan : </label>
                <input type="number" value="{{$menu->urutan}}" name="urutan" class="form-control" id="urutan" aria-describedby="urutan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-4 mt-5">
                <label>Bahasa : </label>
                <br>
                @if ($menu->bahasa == 'indonesia')
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="indonesia" name="bahasa" value="indonesia" checked>
                        <label for="indonesia" class="mr-5">Indonesia</label>
                    </div>
                    <div class="d-inline-block mt-2"> 
                        <input type="radio" id="english" name="bahasa" value="english">
                        <label for="english">English</label>
                    </div>
                @else
                    <div class="d-inline-block mt-2">
                        <input type="radio" id="indonesia" name="bahasa" value="indonesia" >
                        <label for="indonesia" class="mr-5">Indonesia</label>
                    </div>
                    <div class="d-inline-block mt-2"> 
                        <input type="radio" id="english" name="bahasa" value="english" checked>
                        <label for="english">English</label>
                    </div>
                @endif
                
                
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection