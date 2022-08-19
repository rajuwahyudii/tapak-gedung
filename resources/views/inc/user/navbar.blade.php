	<!--================ Offcanvus Menu Area =================-->
		{{-- <div class="side_menu">
			<div class="logo">
				<a href="{{ url('/')}}">
					<img width="100px" height="100px" src="{{ asset('template1/img/logo.png')}}" alt="">
				</a>
			</div>
			<ul class="list menu-left">
				<li>
					<a href="{{ url('/')}}">Beranda</a>
				</li>
				<li>
					<div class="dropdown">
						<button type="button" class="dropdown-toggle" data-toggle="dropdown">
							Blog
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('blog')}}">Blog</a>
							<a class="dropdown-item" href="{{ url('blog/detail_blog')}}">Detail Blog</a>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<button type="button" class="dropdown-toggle" data-toggle="dropdown">
							Pariwisata
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('spot/wisata')}}">Spot Pariwisata</a>
							<a class="dropdown-item" href="{{ url('spot/kategori')}}">Kategori</a>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ url('paket')}}">Paket</a>
				</li>
				<li>
					<a href="{{ url('tentang_desa')}}">Tentang Desa</a>
				</li>
				<li>
					<a href="{{ url('kontak')}}">Kontak</a>
				</li>
				<li>
					<button  class="btn btn-primary"><a style="font-size:12px;color: white" href="{{ url('admin/login')}}">Login Admin</a></button>
				</li>
			</ul>
		</div> --}}
	<!--================ End Offcanvus Menu Area =================-->

	<!--================ Canvus Menu Area =================-->
	{{-- <div class="canvus_menu">
		<div class="container">
			<div class="toggle_icon" title="Menu Bar">
				<span></span>
			</div>
		</div>
	</div> --}}
	<!--================ End Canvus Menu Area =================-->

	{{-- <section class="top-btn-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#" class="main_btn">
						Pesan via WA
						<img src="{{ asset('template1/img/next.png')}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</section> --}}
    <div style="min-height: 5vh"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="font-size:1.3em;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo pr-5">
                    <a href="{{ url('/')}}">
                        <img width="80px" height="80px" src="{{ asset('logo/logo.png')}}" alt="">
                    </a>
                </div>
            </a>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Route::is('user.index') ? 'active' : '' }}">
                    <a class="nav-link ml-1" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown {{ Route::is('user.blog.wisata') ? 'active' : '' }}">
                    <a class="nav-link ml-1 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Objek Wisata	
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach ($wisatas as $wisata)
							<a class="dropdown-item" href="{{route('user.blog.wisata', $wisata->slug)}}">{{$wisata->wisata}}</a>
						@endforeach
                    </div>
                </li>
				@foreach ($menus as $menu)
					@if (Request::segment(2) == $menu->slug)
						<li class="nav-item active">
							<a class="nav-link ml-1" href="{{route('user.blog.index', $menu->slug)}}">{{$menu->menu}}</a>
						</li>
					@else
						<li class="nav-item">
							<a class="nav-link ml-1" href="{{route('user.blog.index', $menu->slug)}}">{{$menu->menu}}</a>
						</li>
					@endif
					
				@endforeach
                </ul>
                {{-- <a href="#" class="main_btn">
                    Pesan via WA
                    <img src="{{ asset('img/next.png')}}" alt="">
                </a> --}}
            </div>
        </div>
    </nav>