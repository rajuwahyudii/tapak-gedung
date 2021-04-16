@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">Membership / Accredited By</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / edit </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.membership_akreditasi.update', $membershipakreditasi->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label for="gambar">LOGO</label>
                <input type="file" value="" name="gambar" accept="image/*" class="form-control" id="gambar" aria-describedby="gambar" placeholder="gambar">
                <hr>
                <label for="url">URL</label>
                <input type="text" value="{{$membershipakreditasi->url}}" name="url" class="form-control" id="url" aria-describedby="url" placeholder="Url">
                <hr>
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection