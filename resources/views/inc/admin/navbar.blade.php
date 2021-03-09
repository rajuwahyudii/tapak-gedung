<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 pr-5 pl-5 pb-3 pt-3">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item {{ Route::is('admin.beranda.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.beranda.index')}}">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ Route::is('admin.profile.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.profile.index')}}">Profile</a>
          </li>
          <li class="nav-item {{ Route::is('admin.admisi.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.admisi.index')}}">Admisi</a>
          </li>
          <li class="nav-item {{ Route::is('admin.alumni.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.alumni.index')}}">Alumni</a>
          </li>
          <li class="nav-item {{ Route::is('admin.kemahasiswaan.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.kemahasiswaan.index')}}">Kemahasiswaan</a>
          </li>
          <li class="nav-item {{ Route::is('admin.akademik.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.akademik.index')}}">Akademik</a>
          </li>
          <li class="nav-item {{ Route::is('admin.penelitian.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.penelitian.index')}}">Penelitian</a>
          </li>
          <li class="nav-item {{ Route::is('admin.pembelajaran.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.pembelajaran.index')}}">Pembelajaran</a>
          </li>
          <li class="nav-item {{ Route::is('admin.berita.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.berita.index')}}">Berita</a>
          </li>
          <li class="nav-item {{ Route::is('admin.article.*') ? 'active' : '' }}">
              <a class="nav-link text-uppercase" href="{{route('admin.article.index')}}">Article</a>
          </li>
      </ul>

      <div class="dropleft show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user small"></i>
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Tambah Admin</a>
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