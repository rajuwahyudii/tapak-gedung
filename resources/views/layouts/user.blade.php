<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <div id="app container-fluid">
        {{-- NAVBAR --}}
        @include('inc.user.navbar')
        {{-- NAVBAR END --}}
        <div>
            @yield('content')
        </div>
        <div style="min-height: 10vh"></div>
        <div class="container-fluid bg-blue text-white mt-5">
            <div class="container p-5">
              <div class="row">
                <div class="col-xl-4">
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
                <div class="col-xl-4 mt-5">
                  <h5>TAUTAN TERKAIT</h5>
                  <hr>
                  <a href="" class="text-white">Universitas Bengkulu</a>
                  <br>
                  <a href="" class="text-white">Fakultas Ekonomi Dan Bisnis</a>
                  <br>
                  <a href="" class="text-white">Perpustakaan UNIB</a>
                </div>
                <div class="col-xl-4 mt-5">
                  <h5>STATISTIK PENGUNJUNG</h5>
                  <hr>
                </div>
              </div>
              
            </div>
          </div>
    </div>
    {{-- <script>
        $('#summernote').summernote({
        placeholder: 'Tulis Konten Disini',
        tabsize: 2,
        height: 500
        });
    </script> --}}
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
