<div class="sidebar col-xl-2 bg-white p-5" style="min-height: 100vh;">
    
    <a href="{{route('admin.content.index')}}">
        <button class="btn btn-block btn-white"> <b> {{ Str::upper(Request::segment(2)) }} </b></button>
        {{-- <h5 class="small text-uppercase"><i class="fas fa-box w-5"></i> &nbsp; {{ Request::segment(2)  }} <hr></h5> --}}
    </a>
    <hr>
    <h5 class="mb-4"><small> Indonesia </small></h5>
    @foreach ($indonesia_contents as $content)
    <a href="{{route('admin.content.show', $content->judul)}}">
        @if (Request::segment(3) == $content->judul)
        <button class="btn mb-2 btn-block btn-dark text-left"> {{$content->judul}} </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> {{$content->judul}} </button>
        @endif
    </a>
    @endforeach
    <hr>
    <h5 class="mb-4"><small> English </small></h5>
    @foreach ($english_contents as $content)
    <a href="{{route('admin.content.show', $content->judul)}}">
        @if (Request::segment(3) == $content->judul)
        <button class="btn mb-2 btn-block btn-dark text-left"> {{$content->judul}} </button>
        @else
        <button class="btn mb-2 btn-block btn-white text-left"> {{$content->judul}} </button>
        @endif
    </a>
    @endforeach
    {{-- <a href="">
        <button class="btn btn-dark btn-block"> Pengantar </button>
    </a> --}}
    
</div>