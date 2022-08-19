<!--================ start footer Area  =================-->
<footer class="footer-area">
    <div class="container">
        <div class="row footer-top">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <img width="100px" height="100px" src="{{ asset('logo/logo.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Objek Wisata</h6>
                    <div class="row">
                        <ul class="col footer-nav">
                        @foreach ($wisatas as $wisata)
                            <li>
                                <a href="{{route('user.blog.wisata', $wisata->slug)}}">{{$wisata->wisata}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Blog</h6>
                    <div class="row">
                        <ul class="col footer-nav">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="{{route('user.blog.index', $menu->slug)}}">{{$menu->menu}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Desa Rindu Hati</h6>
                    <div class="row">
                        <ul class="col footer-nav">
                            Taba Penanjung <br>
                            Kabupaten Bengkulu Tengah <br>
                            Bengkulu
                            <br>
                            <hr>
                            <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                
            </div>
        </div>
    </div>
    <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div>
                    <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Desa Rindu Hati | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="footer-social d-flex align-items-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->