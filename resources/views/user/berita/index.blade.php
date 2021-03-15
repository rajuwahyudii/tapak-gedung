@extends('layouts.user')

@section('content')

<div class="container">
    <h3 class="mt-5">Berita</h3>
    <hr class="mb-5">
    <div class="col-xl-10">
        <div class="container">
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="card d-inline-block m-1" style="width: 18rem;">
                        <img class="card-img-top" width="285" height="180" src="{{ URL::asset('storage/berita') }}/{{$berita->thumbnail}}" alt="Card image cap">
                        <div class="card-body" height="150" >
                            <small>Penulis : {{$berita->penulis}}</small>
                            <br>
                            <small>Tanggal : {{ Str::limit($berita->created_at, 10) }} </small>
                            <hr>
                            <a href="{{route('user.berita.show', [$bahasa, $berita->judul])}}" class="text-dark">
                                <h5 class="card-title">{{$berita->judul}}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




@endsection