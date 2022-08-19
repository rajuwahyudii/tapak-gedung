@extends('layouts.satucol')

@section('sidebar')
@endsection

@section('content')
<div>
    <h1 class="font-1 mt-5 mb-5">Galeri {{$wisata->wisata}}</h1>
</div>
<div class="bg-white p-5 shadow">
    @include('inc.messages')
    
    <a href="{{route('admin.galeri.create', $wisata->id)}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Gambar</button>
    </a>
    <div style="overflow-x: scroll;">
      <table class="table bg-white mb-5">
          <thead class="bg-blue text-white">
            <tr>
              <th scope="col">Wisata</th>
              <th scope="col">Gambar</th>
              <th scope="col" class="text-center">Hapus </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($galeris as $galeri)
              <tr>
                <td>{{$galeri->wisata}}</td>
                <td><img width="100" src=" {{ URL::asset('storage/berita') }}/{{$galeri->gambar}} " alt="thumbnail" class="img-fluid"></td>
                <td class="text-center">
                    <form action="{{route('admin.galeri.destroy', [$wisata->id,$galeri->id])}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Galeri"> 
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