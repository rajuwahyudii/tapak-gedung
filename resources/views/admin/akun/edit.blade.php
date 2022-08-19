@extends('layouts.satucol')

@section('sidebar')
    @include('inc.admin.sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5">Akun</h1>
 </div>
<div class="bg-white p-5 shadow">
    <form action="{{route('admin.akun.update', $akun->id)}}" method="POST">
        @csrf
        <div class="col-xl-12 mb-3">
            @if ($akun->role == 'super admin')
                <label for="role">Role</label>
                <br>
                <div class="d-inline-block mt-2">
                    <input type="radio" id="admin" name="role" value="admin">
                    <label for="admin" class="mr-5">Admin</label>
                    <input type="radio" id="super_admin" name="role" value="super admin" checked>
                    <label for="super_admin" class="mr-5">Super Admin</label>
                </div>
            @else
                    
            @endif
        </div>
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