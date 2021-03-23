<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    @if (empty(Request::segment(2)))
      @if (Request::segment(1) == 'en' )
      <title>Home - Magister Manajemen UNIB</title>
      @else
      <title>Beranda - Magister Manajemen UNIB</title>
      @endif
    @else
      <title>Magister Manajemen UNIB - {{ Request::segment(2) }}</title>
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
    {{-- ICON --}}
    <link rel="icon" href="http://feb.unib.ac.id/wp-content/uploads/2016/03/cropped-fav-unib-e1496768617388-2-32x32.png" sizes="32x32">
    <link rel="icon" href="http://feb.unib.ac.id/wp-content/uploads/2016/03/cropped-fav-unib-e1496768617388-2-192x192.png" sizes="192x192">


    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body class="flex justify-content-center bg-light">
    <div id="app container-fluid" >
        {{-- NAVBAR --}}
        @include('inc.admin.navbar')
        {{-- NAVBAR END --}}
        
        <div class="row" style="width: 85%; margin: auto;">

            {{-- MAINBAR --}}
            <div class="main col-xl-10 mb-5" style="overflow-x: hidden;"> 
                @yield('content')
            </div>
            {{-- MAINBAR END --}}  

            {{-- SIDEBAR --}}
            <div class="sidebar col-xl-2 bg-white pr-4 pl-4 pt-3 pb-5">
                @yield('sidebar')
            </div>
            {{-- SUDEBAR END --}}
            
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
