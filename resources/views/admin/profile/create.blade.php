@extends('layouts.master')

@section('content')
<div>
    <h1>Profile</h1>
    <p class="p-2">admin / profile / create </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.profile.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" aria-describedby="judul" placeholder="Masukan judul">
        </div>
        <textarea name="konten" class="form-control" id="summernote" cols="30" rows="10">
           
        </textarea>
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection