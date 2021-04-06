{{-- edited --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ICON --}}
    <link rel="icon" href="http://feb.unib.ac.id/wp-content/uploads/2016/03/cropped-fav-unib-e1496768617388-2-32x32.png" sizes="32x32">
    <link rel="icon" href="http://feb.unib.ac.id/wp-content/uploads/2016/03/cropped-fav-unib-e1496768617388-2-192x192.png" sizes="192x192">

    {{-- <title>{{ config('app.name', 'Magister Manajemen UNIB') }}</title> --}}
    
    @if (empty(Request::segment(2)))
      @if (Request::segment(1) == 'en' )
      <title>Home - Magister Manajemen UNIB</title>
      @else
      <title>Beranda - Magister Manajemen UNIB</title>
      @endif
    @else
      <title>{{ Request::segment(3) }} - Magister Manajemen UNIB</title>
    @endif


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    

    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body style="background: #ffff;">
    <div id="app">
        <div class="pt-2 pb-2 pr-5 pl-5" style="background: #201f31; margin-bottom: 0;">
          <div class="text-right">

            @if (Request::Segment(1) == 'en')
              <div class="dropdown d-inline m-2">
                <a class="text-white dropdown-toggle" id="bahasa" role="button" data-toggle="dropdown" href="">
                  <img src="{{asset('icon/en.png')}}" alt="">
                  English</a>
                <div class="dropdown-menu" aria-labelledby="bahasa">
                  <a class="dropdown-item" href="/id"> 
                    <img src="{{asset('icon/id.png')}}" alt=""> 
                    Indonesia</a>
                </div>
              </div>
              <a class="m-2 text-white" href="http://unib.ac.id/"> <small>About UNIB</small> </a>
              <a class="m-2 text-white" href="http://feb.unib.ac.id/"> <small>About FEB UNIB</small></a>
              <a class="m-2 text-white" href="http://admisi.unib.ac.id/"> <small>Admision UNIB</small></a>
              
            @else
              <div class="dropdown d-inline m-2">
                <a class="text-white dropdown-toggle" id="bahasa" role="button" data-toggle="dropdown" href="">
                  <img src="{{asset('icon/id.png')}}" alt="">
                  Indonesia</a>
                <div class="dropdown-menu" aria-labelledby="bahasa">
                  <a class="dropdown-item" href="/en"> 
                    <img src="{{asset('icon/en.png')}}" alt=""> 
                    English</a>
                </div>
              </div>
              <a class="m-2 text-white" href="http://unib.ac.id/"> <small>Tentang UNIB</small> </a>
              <a class="m-2 text-white" href="http://feb.unib.ac.id/"> <small>Tentang FEB UNIB</small></a>
              <a class="m-2 text-white" href="http://admisi.unib.ac.id/"> <small>Admisi UNIB</small></a>
                
            @endif
          </div>
          
        </div>
        {{-- NAVBAR --}}
        @include('inc.user.navbar')
        {{-- NAVBAR END --}}
        <div>
            @yield('content')
        </div>
        <div style="min-height: 10vh"></div>
        <div class="container-fluid text-white mt-5" style="background-image: linear-gradient(#333652,#201f31)">
            <div class="container pt-5 pb-5 pr-2 pl-2">
              <div class="row">
                <div class="col-xl-3">
                  <img src="{{asset('logo/logo.png')}}" width="80" alt=""> <br> <hr>
                  <b>
                    UNIVERSITAS BENGKULU <br>
                    FAKULTAS EKONOMI DAN BISNIS <br>
                    MAGISTER MANAJEMEN
                  </b>
                  <hr>
                  <p>Jl. W.R. Supratman Kandang Limun</p>
                  <p>Bengkulu 38371 A</p>
                  <p>Telp : (0736) 20301</p>
                  <p>Sumatera – INDONESIA</p>
                  
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">DEPARTMENTS</h5>
                  <hr>
                  <a href="http://akuntansi.feb.unib.ac.id/" class="text-white">Diploma Akutansi</a>
                  <br>
                  <a href="http://akuntansi.feb.unib.ac.id/" class="text-white">Jurusan Akutansi</a>
                  <br>
                  <a href="http://manajemen.feb.unib.ac.id/" class="text-white">Jurusan Manajemen</a>
                  <br>
                  <a href="http://jisp.feb.unib.ac.id/" class="text-white">Jurusan Ilmu Ekonomi Pembangunan</a>
                  <br>
                  <a href="http://maksi.feb.unib.ac.id/" class="text-white">Magister Akutansi</a>
                  <br>
                  <a href="http://mpp.feb.unib.ac.id/" class="text-white">Magister Perencanaan Pembangunan</a>
                  <br>
                  <a href="http://dim.feb.unib.ac.id/" class="text-white">Program Doktor Ilmu Manajemen</a>
                  <br>
                  <a href="http://pdie.feb.unib.ac.id/" class="text-white">Program Doktor Ilmu Ekonomi</a>
                
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">FACULTIES</h5>
                  <hr>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas KIP</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas Hukum</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas Pertanian</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas Ekonomi dan Bisnis</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas ISIPOL</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas MIPA</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas Teknik</a>
                  <br>
                  <a href="http://fkip.unib.ac.id/" class="text-white">Fakultas Kedokteran</a>
                  <br>
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">E-CAMPUS</h5>
                  <hr>
                  <div class="row">
                    <div class="col-lg-6">
                        <a href="http://pak.unib.ac.id/" class="text-white"><img src="{{asset('footer/pak.png')}}" alt=""></a>
                      <br>
                        <a href="http://ejournal.unib.ac.id/" class="text-white"><img src="{{asset('footer/ejournal.png')}}" alt=""></a>
                      <br>
                        <a href="http://elearning.unib.ac.id/" class="text-white"><img src="{{asset('footer/elearning.png')}}" alt=""></a>
                      <br>
                        <a href="http://wisudaonline.unib.ac.id/" class="text-white"><img src="{{asset('footer/wisuda.png')}}" alt=""></a>
                      <br>
                    </div>
                    <div class="col-lg-6">
                        <a href="http://unib.ac.id/epaper" class="text-white"><img src="{{asset('footer/epaper.png')}}" alt=""></a>
                      <br>
                        <a href="http://mail.unib.ac.id/" class="text-white"><img src="{{asset('footer/email.png')}}" alt=""></a>
                      <br>
                        <a href="http://repository.unib.ac.id/" class="text-white"><img src="{{asset('footer/repository.png')}}" alt=""></a>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3">
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">ACCREDITED BY</h5>
                  <hr>
                  <a href="https://www.banpt.or.id/">
                    <img class="mr-2" width="80" src="{{asset('logo/logo-ban-pt.png')}}" alt="">
                  </a>
                  <a href="https://lamemba.or.id/">
                    <img class="mr-2" width="80" src="{{asset('logo/Logo-LAMEMBA-full-colors-OK.png')}}" alt="">
                  </a>
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">MEMBERSHIP</h5>
                  <hr>
                  <a href="https://www.abest21.org/">
                    <img class="mr-2" width="50" src="{{asset('logo/abest.png')}}" alt="">
                  </a>
                  <a href="https://apmmi.id/">
                    <img class="mr-2" width="80" src="{{asset('logo/apmmi.png')}}" alt="">
                  </a>
                </div>
                <div class="col-xl-3 mt-5">
                  <h5 class="mt-3">SOCIAL MEDIA</h5>
                  <hr>
                  <a href=""><i class="fab fa-instagram ml-2 text-white" style="font-size: 2em;"></i></a> 
                  <a href=""><i class="fab fa-youtube ml-2 text-white" style="font-size: 2em;"></i></a> 
                  <a href=""><i class="fab fa-facebook ml-2 text-white" style="font-size: 2em;"></i></a> 
                  <a href=""><i class="fab fa-twitter ml-2 text-white" style="font-size: 2em;"></i></a> 
                  <a href=""><i class="fab fa-linkedin ml-2 text-white" style="font-size: 2em;"></i></a> 
                </div>
              </div>
              
            </div>
        </div>
        <div style="background: #201f31" class="text-center text-white pt-2 pb-2">
            &copy; Magister Manajemen Universitas Bengkulu
        </div>
    </div>
    {{-- <script>
        $('#summernote').summernote({
        placeholder: 'Tulis Konten Disini',
        tabsize: 2,
        height: 500
        });
    </script> --}}

    @yield('script')
    <script>
        $(function () {
         $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        $('#summernote').summernote({
        placeholder: 'Tulis Konten Disini',
        tabsize: 2,
        height: 500,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['']]
        ]
      });
    </script>
</body>
</html>
