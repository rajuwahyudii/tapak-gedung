    
    <a href="{{route('admin.content.index', ['indonesia','daftar-content'])}}">
        <button class="btn btn-block btn-white"> <b> DAFTAR MENU </b></button>
        {{-- <h5 class="small text-uppercase"><i class="fas fa-box w-5"></i> &nbsp; {{ Request::segment(2)  }} <hr></h5> --}}
    </a>
    <hr>
    <h5 class="mb-4"><small> Indonesia </small></h5>
    @foreach ($indonesia_menus as $menu)
    <a href="{{route('admin.content.index', ['indonesia', $menu->id] )}}">
        @if (Request::segment(4) == $menu->id)
        <button class="btn mb-2 btn-block btn-dark text-left"> {{$menu->menu}} </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> {{$menu->menu}} </button>
        @endif
    </a>
    @endforeach
    <hr>
    <h5 class="mb-4"><small> English </small></h5>
    @foreach ($english_menus as $menu)
    <a href="{{route('admin.content.index', ['english', $menu->id])}}">
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
    