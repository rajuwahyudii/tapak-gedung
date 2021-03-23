<hr>
    <a class="mt-5" href="">
        <button class="btn btn-block btn-white"> <b> KATEGORI BERITA </b></button>
    </a>
    <hr>
    <a href="{{route('admin.berita.index', [$bahasa, 'berita'] )}}">
        <button class="btn mb-2 btn-block text-left"> Berita Umum </button>
    </a>
    <a href="{{route('admin.berita.index', [$bahasa, 'pengumuman'] )}}">
        <button class="btn mb-2 btn-block text-left"> Pengumuman </button>
    </a>
    <a href="{{route('admin.berita.index', [$bahasa, 'acara'] )}}">
        <button class="btn mb-2 btn-block text-left"> Acara </button>
    </a>
    <a href="{{route('admin.berita.index', [$bahasa, 'lowongankerja'] )}}">
        <button class="btn mb-2 btn-block text-left"> Lowongan Kerja </button>
    </a>
    <a href="{{route('admin.berita.index', [$bahasa, 'beasiswa'] )}}">
        <button class="btn mb-2 btn-block text-left"> Beasiswa </button>
    </a>
    <a href="{{route('admin.berita.index', [$bahasa, 'bukurekomendasi'] )}}">
        <button class="btn mb-2 btn-block text-left"> Rekomendasi Buku </button>
    </a>
    