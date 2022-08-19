@extends('layouts.user')

@section('content')
@include('inc.user.navbar')
<!--================ Start Blog Area =================-->
<section class="blog-area section_gap mt-3 mb-5">
    <div class="container">
      <div class="row align-items-end justify-content-left">
        <div class="col-lg-5">
          <div class="main_title">
            <h1>{{$menu->menu}}</h1>
            <p>Artikel-artikel Mengenai {{$menu->menu}} Di Desa Rindu Hati</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="blog_left_sidebar">
                @foreach ($posts as $post)
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a class="active" href="#">{{$post->menu}}</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">{{$post->author}}<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">{{ date('j F, Y', strtotime($post->created_at)) }}<i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{ URL::asset('storage/berita') }}/{{$post->thumbnail}}" alt="">
                                <div class="blog_details">
                                    <a href="{{route('user.blog.show', [$post->menu_slug, $post->slug])}}">
                                        <h2>{{$post->judul}}</h2>
                                    </a>
                                    {{-- <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand
                                        why you should have to spend money on boot camp when you can get the MCSE
                                        study
                                        materials yourself at a fraction.</p> --}}
                                    <p>{!! Str::limit(strip_tags($post->kontent), 200 ,'...') !!}</p>
                                    <a href="{{route('user.blog.show', [$post->menu_slug, $post->slug])}}" class="blog_btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                <div class="row justify-content-center">
                    {{$posts->links("pagination::bootstrap-4")}}
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
            </div>
        </div>
      </div>
    </div>
</section>
<!--================ End Blog Area =================-->
@include('inc.user.footer')
@endsection


