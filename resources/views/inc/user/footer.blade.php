<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0 pb-lg-4">

    <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img width="100px" height="100px" src="{{ asset('logo/logo.png')}}" alt="">
            {{-- <p class="fs--1 text-secondary mb-0 fw-medium mt-2">Book your trip in minute, get full Control for much longer.</p> --}}
        </div>
        <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Objek Wisata</h4>
            <ul class="list-unstyled mb-0">
                @foreach ($wisatas as $wisata)
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('user.blog.wisata', $wisata->slug)}}">{{$wisata->wisata}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Blog</h4>
            <ul class="list-unstyled mb-0">
                @foreach ($menus as $menu)
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="{{route('user.blog.index', $menu->slug)}}">{{$menu->menu}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
            {{-- <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
            <ul class="list-unstyled mb-0">
            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airlinefees</a></li>
            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airline</a></li>
            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Low fare tips</a></li>
            </ul> --}}
        </div>
        <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
            {{-- <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div> --}}
            <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Desa Tapak Gedung</h4>
            {{-- <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2" src="{{ URL::asset('storage/img2/play-store.png')}}" alt="play store" /></a><a href="#!"> <img src="{{ URL::asset('storage/img2/apple-store.png')}}" alt="apple store" /></a></div> --}}
            <div class="row">
                <ul class="col footer-nav">
                    Taba Penanjung <br>
                    Kabupaten Kepahiang <br>
                    Bengkulu
                    <br>
                    <hr>
                    <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                </ul>
            </div>
        </div>
        </div>
    </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights Desa Tapak Gedung </p>
    </div>