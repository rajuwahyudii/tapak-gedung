

@extends('layouts.user')

@section('meta')
  <meta name="title" content="{{$konten->judul}}, Desa Rindu Hati">
  <meta name="description" content="Desa Rindu Hati, desa wisata Kabupaten Bengkulu Tengah, Provinsi Bengkulu,{!! Str::limit(strip_tags($konten->kontent), 50 ,'...') !!}">
  <meta name=”robots” content="index, follow">
  <meta name="keywords" content="{{$konten->judul}},desa rindu hati, bengkulu, bengkulu tengah, wisata bengkulu, wisata keluarga, desa wisata, wisata glamping, wisata daerah, kopi bengkulu, wisata sungai">
@endsection

@section('content')
@include('inc.user.navbar')
    <!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$konten->thumbnail}}" alt="">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 mt-5">
                        <h2 class="mb-5">{{$konten->judul}}</h2>
                        {!! $konten->kontent !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 col-md-12 mb-3">
                    <div class="blog_info text-left">
                        <ul class="blog_meta list">
                            <li><a href="#">Kategori : {{$konten->menu}}</a></li>
                            <li><a href="#">Penulis : {{$konten->author}}<i class="lnr lnr-user"></i></a></li>
                            <li><a href="#">{{$konten->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                        </ul>
                    </div>
                </div>
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
                        <h4 class="widget_title">Kategori</h4>
                        <ul class="list cat-list">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="{{route('user.blog.index', $menu->slug)}}" class="d-flex justify-content-between">
                                        <p>{{$menu->menu}}</p>
                                        {{-- <p>37</p> --}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Objek Wisata</h4>
                        <ul class="list cat-list">
                            @foreach ($wisatas as $wisata)
                                <li>
                                    <a href="{{route('user.blog.wisata', $wisata->slug)}}" class="d-flex justify-content-between">
                                        <p>{{$wisata->wisata}}</p>
                                        {{-- <p>37</p> --}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="br"></div>
                    </aside>
                    {{-- <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Objek Wisata</h3>
                        @foreach ($posts_terbaru as $post_terbaru)
                            <div class="media post_item">
                                <img width="50" src="{{ URL::asset('storage/berita') }}/{{$post_terbaru->thumbnail}}" alt="post">
                                <div class="media-body">
                                    <a href="{{route('user.blog.show', [$post_terbaru->menu, $post_terbaru->slug])}}">
                                        <h3>{{$post_terbaru->judul}}</h3>
                                    </a>
                                    <p>{{$post_terbaru->created_at}}</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($wisatas as $wisata)
                            <div class="media post_item">
                                <img width="50" src="{{ URL::asset('storage/berita') }}/{{$post_terbaru->thumbnail}}" alt="post">
                                <div class="media-body">
                                    <a href="">
                                        <h3>{{$wisata->wisata}}</h3>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="br"></div>
                    </aside> --}}
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--================ Start Blog Area =================-->
<section class="blog-area section_gap mt-5 mb-5">
    <div class="container">
        <div class="row align-items-end justify-content-left">
            <div class="col-lg-6">
              <div class="main_title">
                <h1>Baca Juga...</h1>
              </div>
            </div>
          </div>
        <div class="row justify-content-center">
            @foreach ($posts_terbaru as $post_terbaru)
                <!-- single-blog -->
                <div class="col-lg-4 col-md-4 col-sm-6" >
                    <div class="single-blog" style="height: calc(100% - 15px); margin-bottom: 15px;">
                        <div class="blog-thumb">
                            {{-- <img class="img-fluid" src="{{ URL::asset('storage/berita') }}/{{$post_terbaru->thumbnail}}" alt=""> --}}
                            <div style="overflow: hidden; min-height: 40vh; max-height: 40vh; background: url({{ URL::asset('storage/berita') }}/{{$post_terbaru->thumbnail}}) no-repeat center;"></div>
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta">
                            <a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>{{ date('j F, Y', strtotime($post_terbaru->created_at)) }}</a>
                            </div>
                            <h5><a href="{{route('user.blog.show', [$post_terbaru->menu_slug, $post_terbaru->slug])}}">{{$post_terbaru->judul}}</a></h5>
                            <p>{!! Str::limit(strip_tags($post_terbaru->kontent), 200 ,'...') !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--================ End Blog Area =================-->

@include('inc.user.footer')
@endsection


