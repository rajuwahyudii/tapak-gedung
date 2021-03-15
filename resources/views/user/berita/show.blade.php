@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-xl-10">
            <h3>{{$berita->judul}}</h3>
            <small class="mr-3"> <b> <i class="fas fa-calendar"></i> Tanggal : {{$berita->created_at}}</b></small>
            <small> <b> <i class="fas fa-user"></i> Penulis : {{$berita->penulis}}</b></small>
            <hr>
            <img src=" {{ URL::asset('storage/berita') }}/{{$berita->thumbnail}} " alt="thumbnail" class="img-fluid">
            <div class="mt-5">
                {!! $berita->konten !!}
            </div>
        </div>
        
    </div>
    
</div>
    
@endsection
