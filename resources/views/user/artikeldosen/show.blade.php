@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-xl-10">
            <h3 class="mt-5 font-1" style="font-weight: bolder;">{{$artikeldosen->judul}}</h3>
            <small class="mr-3"> <b> <i class="fas fa-calendar"></i> Tanggal : {{$artikeldosen->created_at}}</b></small>
            <small> <b> <i class="fas fa-user"></i> Penulis : {{$artikeldosen->author}}</b></small>
            <hr>
            <div class="mt-5">
                {!! $artikeldosen->konten !!}
            </div>
        </div>
        
    </div>
    
</div>
    
@endsection
