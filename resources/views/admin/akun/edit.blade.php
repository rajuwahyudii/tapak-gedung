@extends('layouts.master')

@section('sidebar')
    @include('inc.admin.sidebar')
@endsection

@section('content')
<div>
    <h1>akun</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.akun.index')}}">akun</a> / <a href="{{route('admin.akun.edit', $akun->id)}}">{{ strtolower($akun->name)}}</a> / edit </p>
</div>
<div class="bg-white p-5">
    <form action="{{route('admin.akun.update', $akun->id)}}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-xl-6 mt-1">
                <label for="nama">Nama : </label>
                <input type="text" name="name" value="{{$akun->name}}" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukan Nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-6 mt-1">
                <label for="password">Password : </label>
                <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Masukan Password">
            </div>
        </div>
        {{ method_field('PUT') }}
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection