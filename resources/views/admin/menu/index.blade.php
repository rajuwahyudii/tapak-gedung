@extends('layouts.master')

@section('sidebar')
    @include('inc.admin.sidebar')
@endsection

@section('content')
<div>
    <h1>Menus</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / menu </p>
</div>
<div class="bg-white p-5">
    <a href="{{route('admin.menu.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Menu</button>
    </a>
    <table class="table bg-white mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Urutan</th>
            <th scope="col">Bahasa</th>
            <th scope="col">Menu</th>
            <th scope="col">Status</th>
            <th scope="col">Dibuat </th>
            <th scope="col" colspan="2" class="text-center">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($indonesia_menus as $menu)
            <tr>
              <td>{{$menu->urutan}}</td>
              <td>{{$menu->bahasa}}</td>
              <td>{{$menu->menu}}</td>
              <td>{{$menu->status}}</td>
              <td>{{$menu->created_at}}</td>
              <td class="text-right">
                  <a href="{{route('admin.menu.edit', $menu->menu)}}"><button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Edit Menu </button></a>
              </td>
              <td class="text-left">
                <form action="{{route('admin.menu.destroy', $menu->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus</button>
                </form>
            </td>
            </tr>
          @endforeach
        </tbody>
    </table> 
    
    <table class="table bg-white mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Urutan</th>
            <th scope="col">Bahasa</th>
            <th scope="col">Menu</th>
            <th scope="col">Status</th>
            <th scope="col">Dibuat </th>
            <th scope="col" class="text-center" colspan="2">Aksi </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($english_menus as $menu)
            <tr>
              <td>{{$menu->urutan}}</td>
              <td>{{$menu->bahasa}}</td>
              <td>{{$menu->menu}}</td>
              <td>{{$menu->status}}</td>
              <td>{{$menu->created_at}}</td>
              <td class="text-right">
                  <a href="{{route('admin.menu.edit', $menu->menu)}}"><button class="btn btn-primary"> <i class="fas fa-info-circle"></i> Edit Menu </button></a>
              </td>
              <td class="text-left">
                  <form action="{{route('admin.menu.destroy', $menu->id)}}" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger"> <i class="fas fa-trash"></i> Hapus</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table> 
    
</div>
@endsection