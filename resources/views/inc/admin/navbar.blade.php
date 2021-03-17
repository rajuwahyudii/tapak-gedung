<nav class="navbar navbar-expand-lg navbar-light bg-white mb-5 pr-5 pl-5 pb-3 pt-3">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
          @if (Request::segment(2) == 'beranda')
            <li class="nav-item active">
              <a class="nav-link text-uppercase" href="{{route('admin.beranda.index', 'id')}}">Beranda</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="{{route('admin.beranda.index', 'id')}}">Beranda</a>
            </li>
          @endif
          
          <li class="nav-item {{ Route::is('admin.berita.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.berita.index', 'indonesia')}}">Berita</a>
          </li>
          <li class="nav-item {{ Route::is('admin.content.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.content.index', ['indonesia','daftar-content'])}}">Konten</a>
          </li>
          <li class="nav-item {{ Route::is('admin.menu.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.menu.index')}}">Menu</a>
          </li>
          <li class="nav-item {{ Route::is('admin.menutunggal.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.menutunggal.index')}}">Menu Tunggal</a>
          </li>
      </ul>

      <div class="dropleft show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user small"></i>
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{route('admin.akun.index')}}">Tambah Admin</a>
          <a class="dropdown-item" href="#">Ganti Password</a>
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