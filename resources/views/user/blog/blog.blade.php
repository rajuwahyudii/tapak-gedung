<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('template1/img/logo.png')}}" type="image/png">
        <title>Wisata Desa Rindu Hati</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('template1/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/jquery-ui/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/swiper/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template1/vendors/scroll/jquery.mCustomScrollbar.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('template1/css/style.css') }}">
    </head>

<body>

	@include('layouts.header')
	<!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('template1/img/blog/main-blog/m-blog-1.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog/detail_blog">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="blog/detail_blog" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('template1/img/blog/main-blog/m-blog-2.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog/detail_blog">
                                            <h2>The Basics Of Buying A Telescope</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="blog/detail_blog" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('template1/img/blog/main-blog/m-blog-3.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog/detail_blog">
                                            <h2>The Glossary Of Telescopes</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="blog/detail_blog" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('template1/img/blog/main-blog/m-blog-4.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog/detail_blog">
                                            <h2>The Night Sky</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="blog/detail_blog" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="{{ asset('template1/img/blog/main-blog/m-blog-5.jpg')}}" alt="">
                                    <div class="blog_details">
                                        <a href="blog/detail_blog">
                                            <h2>Telescopes 101</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand
                                            why you should have to spend money on boot camp when you can get the MCSE
                                            study
                                            materials yourself at a fraction.</p>
                                        <a href="blog/detail_blog" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="{{ asset('template1/img/blog/author.png')}}" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                                should
                                have to spend money on boot camp when you can get. Boot camps have itssuppor ters
                                andits
                                detractors.
                            </p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="{{ asset('template1/img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog/detail_blog">
                                        <h3>Space The Final Frontier</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('template1/img/blog/popular-post/post2.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog/detail_blog">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('template1/img/blog/popular-post/post3.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog/detail_blog">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('template1/img/blog/popular-post/post4.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="blog/detail_blog">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="{{ asset('template1/img/blog/add.jpg')}}" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving them
                                a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    @include('layouts.footer')
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('template1/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('template1/js/popper.js')}}"></script>
	<script src="{{ asset('template1/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('template1/js/stellar.js')}}"></script>
	<script src="{{ asset('template1/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{ asset('template1/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{ asset('template1/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('template1/js/mail-script.js')}}"></script>
	<script src="{{ asset('template1/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/swiper/js/swiper.min.js')}}"></script>
	<script src="{{ asset('template1/vendors/scroll/jquery.mCustomScrollbar.js')}}"></script>
	<script src="{{ asset('template1/js/theme.js')}}"></script>
</body>

</html>