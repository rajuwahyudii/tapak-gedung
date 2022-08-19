@extends('layouts.duacol')

@section('sidebar')
@include('inc.admin.konten_sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5 mb-5">Kategori Blog</h1>
</div>
<div class="bg-white p-5 shadow">
    @include('inc.messages')
    
    <a href="{{route('admin.menu.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Kategori</button>
    </a>
    <div style="overflow-x: scroll;">
      <table class="table bg-white mb-5">
          <thead class="bg-blue text-white">
            <tr>
              <th scope="col">Urutan</th>
              <th scope="col">Kategori</th>
              <th scope="col">Dibuat </th>
              <th scope="col" class="text-center">Edit </th>
              <th scope="col" class="text-center">Hapus </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($menus as $menu)
              <tr>
                <td>{{$menu->urutan}}</td>
                <td>{{$menu->menu}}</td>
                <td>{{$menu->created_at}}</td>
                <td class="text-center">
                    <a href="{{route('admin.menu.edit', $menu->id)}}" data-toggle="tooltip" data-placement="bottom" title="Edit Menu">
                      <button class="btn btn-primary "> 
                        <i class="fas fa-pen"></i> 
                      </button>
                    </a>
                </td>
                <td class="text-center">
                  <form action="{{route('admin.menu.destroy', $menu->id)}}" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Menu"> 
                        <i class="fas fa-trash"></i>
                      </button>
                  </form>
              </td>
              </tr>
            @endforeach
          </tbody>
      </table> 
    </div>
</div>
@endsection