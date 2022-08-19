@extends('layouts.duacol')

@section('sidebar')
    @include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    
</div>
<div class="row justify-content-between">
    <div class="col-xl-7 pt-5 pb-2">
        <h1 class="font-1">Konten Blog</h1>
    </div>
    <div class="col-xl-5 pt-5 pb-2">
        @if (auth()->user()->role == 'super admin')
            @if ($content->status == 'draf')
                <a href="{{route('admin.content.status', $content->id)}}">
                    <button class="btn btn-success mr-auto"> <i class="fas fa-check"></i> Setujui</button>
                </a>
            @else
                <a href="{{route('admin.content.status', $content->id)}}">
                    <button class="btn btn-danger"> <i class="fas fa-ban"></i> Draf </button>
                </a>
            @endif
        @endif
        <a href="{{route('admin.content.edit', [$content->menu, $content->id])}}">
            <button class="btn btn-primary pl-5 pr-5"> <i class="fas fa-pen"></i> Edit</button>
        </a>
        <form class="d-inline" action="{{route('admin.content.destroy', $content->id)}}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-outline-danger"> <i class="fas fa-trash"></i> Hapus</button>
        </form>
    </div>
</div>
<div class="bg-white p-5 shadow">
    <div class="container"> 
        <div class="row">
            <h3>{{$content->judul}}</h3>
            
        </div>   
        <hr>
        <div class="row">
            <p>
                @if (empty($content->wisata))
                @else
                    Objek Wisata : {{$content->wisata}} &nbsp;&nbsp;&nbsp;
                @endif
                Penulis : {{$content->author}} &nbsp;&nbsp;&nbsp; Di buat pada : {{$content->created_at}}
            </p>
        </div>   
    </div>
    <div class="mt-5">
        <img src=" {{ URL::asset('storage/berita') }}/{{$content->thumbnail}} " alt="thumbnail" class="img-fluid">
    </div>  
    <hr class="mb-5">
    <div>
        {!!$content->kontent!!}
    </div>
</div>
@endsection