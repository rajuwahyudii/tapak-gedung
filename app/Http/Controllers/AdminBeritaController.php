<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Path\To\DOMdocument;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Berita;

class AdminBeritaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($bahasa, $kategori)
    {
        if ($bahasa == 'english') {
            $beritas = DB::table('beritas')->where('kategori', $kategori)->where('bahasa', 'english')->paginate(5);
        } else {
            $beritas = DB::table('beritas')->where('kategori', $kategori)->where('bahasa', 'indonesia')->paginate(5);
        }

        return view('admin.berita.index')->with('beritas', $beritas)->with('bahasa', $bahasa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($kategori, $bahasa)
    {
        return view('admin.berita.create')->with('bahasa', $bahasa)->with('kategori', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('thumbnail')) {
            $thumbnailName = time() . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move(public_path('storage/berita/'), $thumbnailName);
        } else {
            $thumbnailName = 'default.png';
        }

        if (!empty($request->konten)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $group);
                    $mimetype = $group['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filepath = ("$storage/$fileNameContentRand.$mimetype");
                    $image = Image::make($src)
                        ->encode($mimetype, 100)
                        ->save(public_path($filepath));
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-fluid');
                }
            }
        }

        $berita = new Berita();
        $berita->judul = $request->input('judul');
        $berita->kategori = $request->input('kategori');
        $berita->thumbnail = $thumbnailName;
        $berita->kategori = $request->input('kategori');
        $berita->bahasa = $request->input('bahasa');
        if (!empty($request->konten)) {
            $berita->konten = $dom->saveHTML();
        } else {
            $berita->konten = " - ";
        }


        $berita->penulis = Auth::user()->name;
        $berita->save();

        return redirect()->route('admin.berita.index',  [$berita->bahasa, $berita->kategori])->with('success', 'berita berhasil dibuat !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bahasa, $kategori, $id)
    {

        $berita = DB::table('beritas')
            ->where('beritas.id', $id)
            ->get()
            ->first();

        return view('admin.berita.show')
            ->with('berita', $berita)
            ->with('bahasa', $bahasa)
            ->with('kategori', $kategori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bahasa, $kategori, $id)
    {
        $berita = DB::table('beritas')
            ->where('beritas.id', $id)
            ->get()
            ->first();

        return view('admin.berita.edit')->with('berita', $berita)->with('bahasa', $bahasa)->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnailName = time() . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move(public_path('storage/berita/'), $thumbnailName);
        } else {
            $thumbnailName = 'default.png';
        }

        if (!empty($request->konten)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');
            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (preg_match('/data:image/', $src)) {
                    preg_match('/data:image\/(?<mime>.*?)\;/', $src, $group);
                    $mimetype = $group['mime'];
                    $fileNameContent = uniqid();
                    $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                    $filepath = ("$storage/$fileNameContentRand.$mimetype");
                    $image = Image::make($src)
                        ->encode($mimetype, 100)
                        ->save(public_path($filepath));
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-fluid');
                }
            }
        }

        $berita = Berita::find($id);
        $berita->judul = $request->input('judul');
        $berita->kategori = $request->input('kategori');
        $berita->bahasa = $request->input('bahasa');
        $berita->thumbnail = $thumbnailName;
        if (!empty($request->konten)) {
            $berita->konten = $dom->saveHTML();
        } else {
            $berita->konten = " - ";
        }
        $berita->penulis = Auth::user()->name;
        $berita->save();

        return redirect()->route('admin.berita.index',  [$berita->bahasa, $berita->kategori])->with('success', 'berita berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $databerita = Berita::find($id);

        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('admin.berita.index',  [$databerita->bahasa, $databerita->kategori])->with('success', 'berita berhasil dihapus !!');
    }
}
