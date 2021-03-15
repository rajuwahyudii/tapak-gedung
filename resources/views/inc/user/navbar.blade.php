<nav class="navbar navbar-expand-lg navbar-light bg-light pr-5 pl-5 pt-3 pb-3">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          @if (Request::segment(2) == null)
              <a class="nav-link active" style="text-transform: uppercase;" href="{{route('user.index', $bahasa)}}">Beranda</a>
            @else
              <a class="nav-link" style="text-transform: uppercase;" href="{{route('user.index', $bahasa)}}">Beranda</a>
            @endif
          
        </li>
        @foreach ($menus as $menu)
          <li class="nav-item dropdown">
            @if (Request::segment(2) == $menu->menu)
              <a class="nav-link dropdown-toggle active" style="text-transform: uppercase;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$menu->menu}}
              </a>
            @else
              <a class="nav-link dropdown-toggle" style="text-transform: uppercase;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$menu->menu}}
              </a>
            @endif
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($contents as $content)
                  @if ($content->menu_id == $menu->id)
                    <a class="dropdown-item" href="{{route('user.content', [$bahasa, $menu->menu , $content->judul])}}">{{$content->judul}}</a>
                  @endif
                @endforeach
            </div>
          </li>
        @endforeach
        <li class="nav-item">
          @if (Request::segment(2) == 'berita')
          <a class="nav-link active" style="text-transform: uppercase;" href="{{route('user.berita.index', $bahasa)}}">Berita</a>
            @else
            <a class="nav-link" style="text-transform: uppercase;" href="{{route('user.berita.index', $bahasa)}}">Berita</a>
            @endif
          
        </li>
        
      </ul>
    </div>
  </nav>