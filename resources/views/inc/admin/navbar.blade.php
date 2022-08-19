<nav class="navbar navbar-expand-lg navbar-light bg-white font-weight-bold pr-5 pl-5 pt-3 pb-4 mb-5">
    <a class="navbar-brand ml-5 pl-3" href="/admin">
      <img width="50" src="{{asset('logo/logo.png')}}" alt="">
    </a>
    <a class="navbar-brand" href="/admin">
      <small class="font-weight-bold">DESA TAPAK GEDUNG</small>
    </a>
    <button class="navbar-toggler text-dark"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
      {{-- <span class="navbar-toggler-icon"></span> --}}
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @if (Auth::user()->role == 'super admin')
        <ul class="navbar-nav m-auto pt-3" style="font-size: small;" >
            @if (Request::segment(2) == 'beranda')
              <li class="nav-item active">
                <a class="nav-link text-uppercase" href="{{route('admin.beranda.index')}}">Beranda</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{route('admin.beranda.index')}}">Beranda</a>
              </li>
            @endif
            
            <li class="nav-item {{ Route::is('admin.content.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.content.index', 'daftar-content')}}">Blog</a>
            </li>
            <li class="nav-item {{ Route::is('admin.menu.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.menu.index')}}">Kategori Blog</a>
            </li>
            <li class="nav-item {{ Route::is('admin.wisata.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.wisata.index')}}">Objek Wisata</a>
            </li>
            <li class="nav-item {{ Route::is('admin.akun.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.akun.index')}}">Tambah Admin</a>
            </li>
            {{-- <li class="nav-item {{ Route::is('admin.menutunggal.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.menutunggal.index')}}">Menu Tunggal</a>
            </li> --}}
        </ul>
      @else
        <ul class="navbar-nav m-auto pt-3" style="font-size: small;" >
              <li class="nav-item {{ Route::is('admin.beranda.*') ? 'active' : '' }}">
                <a class="nav-link text-uppercase" href="{{route('admin.beranda.index')}}">Beranda</a>
              </li>
            
            <li class="nav-item {{ Route::is('admin.content.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.content.index', 'daftar-content')}}">Blog</a>
            </li>
            <li class="nav-item {{ Route::is('admin.menu.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.menu.index')}}">Kategori Blog</a>
            </li>
        </ul> 
      @endif
      <p class="mr-5 mt-3 mb-3 pt-3 text-capitalize"> {{Auth::user()->role}}</p>
      <div class="dropdown show pt-3 mr-5 pr-3">
        <a class="btn btn-dark text-uppercase dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ Str::limit(Auth::user()->name, 9) }}
          <i class=" ml-2 fas fa-user small"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{route('admin.akun.edit', Auth::user()->id)}}">Ganti Password</a>
          <hr>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            KELUAR <i class="fas fa-sign-out-alt"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </div>
</nav>