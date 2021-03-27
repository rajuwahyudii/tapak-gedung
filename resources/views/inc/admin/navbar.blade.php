<nav class="navbar navbar-expand-lg navbar-custom pr-5 pl-5 pt-3 pb-4 mb-5">
    <a class="navbar-brand ml-5 pl-3" href="/admin">
      <img width="50" src="{{asset('logo/logo.png')}}" alt="">
    </a>
    <a class="navbar-brand" href="/admin">
      <small>MAGISTER MANAJEMEN <br> UNIVERSITAS BENGKULU</small>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto" style="font-size: small;" >
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
            <a class="nav-link text-uppercase" href="{{route('admin.berita.index', ['indonesia','berita'])}}">Berita</a>
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
          <li class="nav-item {{ Route::is('admin.artikeldosen.*') ? 'active' : '' }}">
            <a class="nav-link text-uppercase" href="{{route('admin.artikeldosen.index', 'indonesia')}}">Artikel Dosen</a>
          </li>
      </ul>

      <div class="dropdown show mr-5 pr-3">
        <a class="btn bg-yellow dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{ Str::limit(Auth::user()->name, 9) }}
          <i class=" ml-2 fas fa-user small"></i>
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{route('admin.akun.index')}}">Tambah Admin</a>
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