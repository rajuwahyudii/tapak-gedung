@extends('layouts.user')

@section('content')
@include('inc.user.navbar')
    <!--================ Start Newsletter Area =================-->
    <section class="newsletter-area section_gap">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h1>{{$kategori}}</h1>
                        <hr>
                        <h5>Unggahan Mengenai {{$kategori}} Di Desa Rindu Hati</h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.</p> --}}
                        {{-- <div id="mc_embed_signup">
                            
                                <div class="input-group d-flex flex-row">
                                    <button class="main_btn">
                                        Baca Selengkapnya
                                        <img src="img/next.png" alt="">
                                    </button>
                                </div>
                                <div class="mt-10 info"></div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    {{-- <img class="img-fluid nw-img" src="{{ URL::asset('storage/img/banner/glamping.jpg')}}" alt=""> --}}
                </div>
            </div>
    </section>
    <!--================ End Newsletter Area =================-->
    <!--================Blog Area =================-->
    <section class="blog_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach ($posts as $post)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{$post->menu}}</a></li>
                                            <li><a href="#">{{$post->author}}<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">{{$post->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        {{-- <img src="{{ asset('img/blog/main-blog/m-blog-1.jpg')}}{{ URL::asset('storage/berita') }}/{{$berita->thumbnail}}" alt=""> --}}
                                        <img src="{{ URL::asset('storage/berita') }}/{{$post->thumbnail}}" alt="">
                                        <div class="blog_details">
                                            <a href="{{route('user.blog.show', [$kategori, $post->slug])}}">
                                                <h2>{{$post->judul}}</h2>
                                            </a>
                                            {{-- <a href="{{route('user.blog.show', [$kategori, $post->slug])}}" class="blog_btn">View More</a> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                                <hr>
                            </article>
                        @endforeach
                        <div class="row justify-content-center">
                            <nav class="mt-5" aria-label="...">
                                <ul class="pagination">
                                    {{$posts->links("pagination::bootstrap-4")}}
                                </ul>
                            </nav>
                          </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        {{-- <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside> --}}
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
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Posts Terbaru</h3>
                            @foreach ($posts_terbaru as $posts_terbaru)
                                <div class="media post_item">
                                    <img src="{{ URL::asset('storage/berita') }}/{{$post->thumbnail}}" alt="post">
                                    <div class="media-body">
                                        <a href="blog/detail_blog">
                                            <h3>{{$posts_terbaru->judul}}</h3>
                                        </a>
                                        <p>{{$posts_terbaru->created_at}}</p>
                                    </div>
                                </div>
                            @endforeach
                            
                            <div class="br"></div>
                        </aside>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@include('inc.user.footer')
@endsection


