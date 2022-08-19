@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Admin</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.akun.index')}}">akun</a>  / create </p>
</div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.akun.store')}}" method="POST">
        @csrf
        <div class="col-xl-12 mb-5">
            <label for="role">Role</label>
            <br>
            <div class="d-inline-block mt-2">
                <input type="radio" id="admin" name="role" value="admin" checked>
                <label for="admin" class="mr-5">Admin</label>
                <input type="radio" id="super_admin" name="role" value="super admin">
                <label for="super_admin" class="mr-5">Super Admin</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-6 mt-1">
                <label for="nama">Nama : </label>
                <input type="text" name="name" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukan Nama">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xl-6 mt-1">
                <label for="email">Email : </label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Masukan Email">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-xl-6 mt-1">
                <label for="password">Password : </label>
                <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Masukan Password">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3 pr-5 pl-5">Simpan</button>
    </form>
</div>
@endsection