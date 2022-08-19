    
    <a href="{{route('admin.content.index', 'daftar-content')}}">
        <button class="btn btn-block btn-white"> <b> DAFTAR KATEGORI </b></button>
        {{-- <h5 class="small text-uppercase"><i class="fas fa-box w-5"></i> &nbsp; {{ Request::segment(2)  }} <hr></h5> --}}
    </a>
    <hr>
    @foreach ($menus as $menu)
    <a href="{{route('admin.content.index', $menu->id )}}">
        @if (Request::segment(4) == $menu->id)
        <button class="btn mb-2 btn-block btn-dark text-left"> {{$menu->menu}} </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> {{$menu->menu}} </button>
        @endif
    </a>
    @endforeach
    {{-- <a href="">
        <button class="btn btn-dark btn-block"> Pengantar </button>
    </a> --}}
    