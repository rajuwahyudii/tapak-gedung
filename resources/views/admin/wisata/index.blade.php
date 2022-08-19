@extends('layouts.duacol')

@section('sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5 mb-5">Objek Wisata</h1>
</div>
<div class="bg-white p-5 shadow">
    @include('inc.messages')
    
    <a href="{{route('admin.wisata.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Wisata</button>
    </a>
    <div style="overflow-x: scroll;">
      <table class="table bg-white mb-5">
          <thead class="bg-blue text-white">
            <tr>
              <th scope="col">Urutan</th>
              <th scope="col">Wisata</th>
              <th scope="col">Dibuat </th>
              <th scope="col" class="text-center">Aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($wisatas as $wisata)
              <tr>
                <td>{{$wisata->urutan}}</td>
                <td>{{$wisata->wisata}}</td>
                <td>{{$wisata->created_at}}</td>
                <td class="text-center">
                  <a href="{{route('admin.wisata.show', $wisata->id)}}"><button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Wisata </button></a>
              </td>
                {{-- <td class="text-center">
                    <a href="{{route('admin.wisata.edit', $wisata->wisata)}}" data-toggle="tooltip" data-placement="bottom" title="Edit wisata">
                      <button class="btn btn-primary "> 
                        <i class="fas fa-pen"></i> 
                      </button>
                    </a>
                </td>
                <td class="text-center">
                  <form action="{{route('admin.wisata.destroy', $wisata->id)}}" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus wisata"> 
                        <i class="fas fa-trash"></i>
                      </button>
                  </form>
                </td> --}}
              </tr>
            @endforeach
          </tbody>
      </table> 
    </div>
</div>
@endsection