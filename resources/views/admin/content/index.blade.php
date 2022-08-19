@extends('layouts.duacol')

@section('sidebar')
  @include('inc.admin.konten_sidebar')
@endsection

@section('content')
{{-- <div>

  @if (Request::segment(3) != 'daftar-content')
    @foreach ($menus as $menu)
      @if ($menu->id == Request::segment(3))
          <h1>Konten {{$menu->menu}}</h1>
          <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index', 'daftar-content')}}">content</a> / {{$menu->menu}}</p>
      @endif
    @endforeach
  @else
  <h1>Semua Konten</h1>
  <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index', 'daftar-content')}}">content</a> / Semua Content</p>
  @endif
    
</div> --}}

<div class="row">
  <div class="col-xl-8">
    @if (Request::segment(3) != 'daftar-content')
    @foreach ($menus as $menu)
        @if ($menu->id == Request::segment(3))
            <h1 class="font-1 mt-5">{{$menu->menu}}</h1>
            
        @endif
      @endforeach
    @else
    <h1 class="font-1 mt-5">Semua Post</h1>
    <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / <a href="{{route('admin.content.index','daftar-content')}}">content</a> / Semua Content</p>
    @endif
  </div>
</div>

<div class="bg-white p-5 shadow">
    @include('inc.messages')

    <a href="{{route('admin.content.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Post</button>
    </a>
    <div style="overflow-x: scroll;">
      <table class="table bg-white mb-5">
          <thead class="bg-blue text-white">
            <tr>
              <th scope="col">Kategori</th>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal Dibuat </th>
              <th scope="col">Status</th>
              <th scope="col" class="text-center">Aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contents as $content)
              <tr>
                <td>{{$content->menu}}</td>
                <td>{{ Str::limit($content->judul, 30, '...')}}</td>
                <td>{{ Carbon\Carbon::parse($content->created_at)->format('Y-m-d') }}</td>
                @if ($content->status == 'draf')
                  <td> <i class=" text-danger fas fa-circle"></i> Draf</td>
                  @else
                  <td> <i class=" text-success fas fa-circle"></i> Aktif</td>
                @endif

                @if (auth()->user()->role == 'super admin')
                  <td class="text-center">
                      @if ($content->status == 'draf')
                        <a href="{{route('admin.content.status', $content->id)}}"><button class="btn btn-success "> <i class="fas fa-check"></i> Setujui </button></a>
                      @else
                        <a href="{{route('admin.content.status', $content->id)}}"><button class="btn btn-danger "> <i class="fas fa-ban"></i> Draf </button></a>
                      @endif
                      <a href="{{route('admin.content.show', [$content->menu,$content->id] )}}"><button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Post </button></a>
                  </td> 
                @else
                  <td class="text-center">
                      <a href="{{route('admin.content.show', [$content->menu,$content->id] )}}"><button class="btn btn-primary "> <i class="fas fa-info-circle"></i> Detail Post </button></a>
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
          
      </table>  
    </div>
    <div class="row justify-content-center">
      <nav class="mt-5" aria-label="...">
          <ul class="pagination">
              {{-- {{$tikets->appends('tikets')->links("pagination::bootstrap-4")}} --}}
              {{$contents->links("pagination::bootstrap-4")}}
              {{-- {!! $tikets->render() !!} --}}
          </ul>
      </nav>
    </div>
</div>
@endsection
