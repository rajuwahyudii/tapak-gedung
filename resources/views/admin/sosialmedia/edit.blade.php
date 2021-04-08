@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">Sosial media</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / edit </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.sosialmedia.update', $sosial_media->id)}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <h5 style="text-transform: uppercase;" >{{$sosial_media->nama}}</h5>
                <hr>
                <input type="text" value="{{$sosial_media->url}}" name="url" class="form-control" id="url" aria-describedby="url" placeholder="Url">
                <hr>
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection