@extends('layouts.master')

@section('content')
<div>
    <h1>Alumni</h1>
    <p class="p-2">admin / alumni </p>
</div>
<div class="bg-white p-5">
    <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Submenu</button>
    <table class="table bg-white">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Submenu</th>
            <th scope="col">Tanggal Dibuat </th>
            <th scope="col">Nama pembuat </th>
            <th scope="col">Aksi </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pengantar</td>
            <td>2020-12-01</td>
            <td>Nama orang</td>
            <td>
                <a href=""><button class="btn btn-primary ">Edit Konten <i class="fas fa-pen"></i> </button></a>
            </td>
          </tr>
        </tbody>
    </table>
</div>
@endsection