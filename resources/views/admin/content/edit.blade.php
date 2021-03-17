@extends('layouts.duacol')

@section('sidebar')
    @include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1>content</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index', ['indonesia',$content->menu] )}}">content</a> / <a href="{{route('admin.content.show', ['indonesia',$content->menu, $content->judul])}}">{{ strtolower($content->judul)}}</a> / edit </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.content.update', $content->id)}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-12 mb-5">
                <label for="judul">Menu Indonesia : </label>
                <br>
                @foreach ($indonesia_menus as $menu)
                    @if ($content->menu == $menu->menu)
                        <div class="d-inline-block mt-2">
                            <input type="radio" id="{{$menu->menu}}" name="menu_id" value="{{$menu->id}}" checked>
                            <label for="{{$menu->menu}}" class="mr-5">{{$menu->menu}}</label>
                        </div>
                    @else
                        <div class="d-inline-block mt-2">
                            <input type="radio" id="{{$menu->menu}}" name="menu_id" value="{{$menu->id}}">
                            <label for="{{$menu->menu}}" class="mr-5">{{$menu->menu}}</label>
                        </div>
                    @endif
                    
                @endforeach
            </div>
            <div class="col-xl-12 mb-5">
                <label for="judul">Menu English : </label>
                <br>
                @foreach ($english_menus as $menu)
                    @if ($content->menu == $menu->menu)
                        <div class="d-inline-block mt-2">
                            <input type="radio" id="{{$menu->menu}}" name="menu_id" value="{{$menu->id}}" checked>
                            <label for="{{$menu->menu}}" class="mr-5">{{$menu->menu}}</label>
                        </div>
                    @else
                        <div class="d-inline-block mt-2">
                            <input type="radio" id="{{$menu->menu}}" name="menu_id" value="{{$menu->id}}">
                            <label for="{{$menu->menu}}" class="mr-5">{{$menu->menu}}</label>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-xl-7">
                <label for="judul">Judul : </label>
                <input type="text" value="{{$content->judul}}" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
            </div>
            <div class="col-xl-2">
                <label for="urutan">Urutan : </label>
                <input type="number" value="{{$content->urutan}}" name="urutan" class="form-control" id="urutan" aria-describedby="urutan">
            </div>
        </div>
        <p>Konten :</p>
        <textarea name="kontent" class="form-control" id="summernote" cols="30" rows="10">
           {{$content->kontent}}
        </textarea>

        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection