
    <a href="{{route('admin.berita.index')}}">
        <button class="btn btn-block btn-white"> <b> DAFTAR BERITA </b></button>
        {{-- <h5 class="small text-uppercase"><i class="fas fa-box w-5"></i> &nbsp; {{ Request::segment(2)  }} <hr></h5> --}}
    </a>
    <hr>
    <h5 class="mb-4"><small> Bahasa </small></h5>
    <a href="{{route('admin.berita.bahasa_filter', 'indonesia')}}">
        @if (Request::segment(4) == 'indonesia')
        <button class="btn mb-2 btn-block btn-dark text-left"> Indonesia </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> Indonesia </button>
        @endif
    </a>
    <a href="{{route('admin.berita.bahasa_filter', 'english')}}">
        @if (Request::segment(4) == 'english')
        <button class="btn mb-2 btn-block btn-dark text-left"> English </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> English </button>
        @endif
    </a>
    {{-- <a href="">
        <button class="btn btn-dark btn-block"> Pengantar </button>
    </a> --}}
    