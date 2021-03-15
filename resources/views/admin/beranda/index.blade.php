@extends('layouts.satucol')

@section('style')
    <style>
      .carousel-item:after {
        content:"";
        position:absolute;
        top:0;
        bottom:0;
        left:0;
        right:0;
        background:rgba(0,0,0,0.6);
      }
    </style>
@endsection


@section('content')
<div class="row">
    <div class="col-xl-9">
      <h1>Beranda</h1>
      <p class="p-2"><a href="{{route('admin..index')}}">admin</a> / beranda </p>
    </div>
    <div class="col-xl-3 mt-5 pl-5">
      @if (Request::segment(3) == 'english')
        <a href="{{route('admin.beranda.index', 'indonesia')}}">
          <button type="button" class="btn mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
        </a>
        <a href="{{route('admin.beranda.index', 'english')}}">
            <button type="button" class="btn btn-dark mb-3"><i class="fas fa-book"></i> English</button>
        </a>
      @else
        <a href="{{route('admin.beranda.index', 'indonesia')}}">
          <button type="button" class="btn btn-dark mb-3 mr-3"><i class="fas fa-book"></i> Indonesia </button>
        </a>
        <a href="{{route('admin.beranda.index', 'english')}}">
            <button type="button" class="btn mb-3"><i class="fas fa-book"></i> English</button>
        </a>
      @endif
      
    </div>
</div>
<div class="bg-white p-5">
    @include('inc.messages')
    <div>
      <h2 >Slider</h2>
    </div>
    <hr>
    <div id="sliderIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach ($sliders as $slider)
          <li data-target="#sliderIndicators" data-slide-to="0" class="active"></li>
            
        @endforeach
        {{-- <li data-target="#sliderIndicators" data-slide-to="1"></li>
        <li data-target="#sliderIndicators" data-slide-to="2"></li> --}}
      </ol>
      <div class="carousel-inner">
      @foreach ($sliders as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ URL::asset('storage/slider') }}/{{$slider->gambar}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block mb-5">
                <h3>{{$slider->title}}</h3>
                <p>{{$slider->caption}}</p>
            </div>
        </div>
      @endforeach
        
      </div>
      <a class="carousel-control-prev" href="#sliderIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#sliderIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <hr class="mb-5">
    <a href="{{route('admin.slider.create')}}">
        <button type="button" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Slider</button>
    </a>
    <table class="table bg-white mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Caption</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col" class="text-center">Edit </th>
            <th scope="col" class="text-center">Hapus </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sliders as $slider)
            <tr>
              <td>{{$slider->gambar}}</td>
              <td>{{$slider->title}}</td>
              <td>{{$slider->caption}}</td>
              <td>{{$slider->created_at}}</td>
              <td class="text-center">
                  <a href="{{route('admin.slider.edit', $slider->id)}}" data-toggle="tooltip" data-placement="bottom" title="Edit Menu">
                    <button class="btn btn-primary "> 
                      <i class="fas fa-pen"></i> 
                    </button>
                  </a>
              </td>
              <td class="text-center">
                <form action="{{route('admin.slider.destroy', $slider->id)}}" method="POST">
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
@endsection