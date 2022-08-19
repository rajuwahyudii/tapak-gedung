@extends('layouts.satucol')

@section('content')
@if (auth()->user()->role == 'super admin')
    <div>
        <div>
            <h1 class="font-1 mt-5 mb-5 text-capitalize">Selamat Datang {{auth()->user()->name}}, <br> Anda Login Sebagai {{auth()->user()->role}}</h1>
        </div>
    </div>
    <div>
        <div class="bg-white p-5 shadow">
            <h3 class="font-1 mt-3 mb-3">Video Youtube Beranda</h3>
            <form action="{{route('admin.beranda.youtube', $youtube->id)}}" method="POST">
                @csrf
                @include('inc.messages')
                <div class="form-group row">
                    <div class="col-xl-6 mt-1">
                        <input required type="text" value="{{$youtube->link}}" name="link" class="form-control" id="menu" aria-describedby="menu" placeholder="Link Url Video">
                    </div>
                </div>
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
            </form>
        </div>
    </div>
@else
    <div>
        <div>
            <h1 class="font-1 mt-5 mb-5 text-capitalize">Selamat Datang {{auth()->user()->name}}, <br> Anda Login Sebagai {{auth()->user()->role}}</h1>
        </div>
    </div>
@endif



@endsection