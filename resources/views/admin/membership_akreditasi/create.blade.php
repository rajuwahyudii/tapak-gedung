@extends('layouts.satucol')

@section('content')
<div>
    <h1 class="font-1 mt-5">Membership / Accredited By</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / edit </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.membership_akreditasi.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-5">
                <label>Kategori : </label>
                <br>
                <div class="d-inline-block mt-2 mr-5">
                    <input type="radio" id="membership" name="kategori" value="membership" checked>
                    <label for="membership">Membership</label>
                </div>
                <div class="d-inline-block mt-2 mr-5"> 
                    <input type="radio" id="accreditedBy" name="kategori" value="accreditedBy">
                    <label for="accreditedBy">Accredited By</label>
                </div>
                <hr>
                <label for="gambar">LOGO</label>
                <input type="file" value="" name="gambar" accept="image/*" class="form-control" id="gambar" aria-describedby="gambar" placeholder="gambar">
                <hr>
                <label for="url">URL</label>
                <input type="text" value="" name="url" class="form-control" id="url" aria-describedby="url" placeholder="Url">
                <hr>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection