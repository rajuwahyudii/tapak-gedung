<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Path\To\DOMdocument;
use Intervention\Image\ImageManagerStatic as Image;

use App\Models\Artikeldosen;

class AdminArtikeldosenController extends Controller
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

    public function index($bahasa)
    {
        if ($bahasa == 'english') {
            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'english')->where('kategori', 'artikeldosen')->orderBy('created_at', 'DESC')->get();
            $tesises = DB::table('artikeldosens')->where('bahasa', 'english')->where('kategori', 'tesis')->orderBy('created_at', 'DESC')->get();
            $disertasis = DB::table('artikeldosens')->where('bahasa', 'english')->where('kategori', 'disertasi')->orderBy('created_at', 'DESC')->get();
        } else {
            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'indonesia')->where('kategori', 'artikeldosen')->orderBy('created_at', 'DESC')->get();
            $tesises = DB::table('artikeldosens')->where('bahasa', 'indonesia')->where('kategori', 'tesis')->orderBy('created_at', 'DESC')->get();
            $disertasis = DB::table('artikeldosens')->where('bahasa', 'indonesia')->where('kategori', 'disertasi')->orderBy('created_at', 'DESC')->get();
        }

        return view('admin.artikeldosen.index')
            ->with('bahasa', $bahasa)
            ->with('tesises', $tesises)
            ->with('disertasis', $disertasis)
            ->with('artikeldosens', $artikeldosens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikeldosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        if (!empty($request->konten)) {
            $storage = 'storage/artikeldosen';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            // $dom->loadHTML($request->konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            $dom->loadHTML($request->konten);
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
                        ->save($filepath);
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-fluid');
                }
            }
        }

        $artikeldosen = new Artikeldosen();
        $artikeldosen->judul = $request->input('judul');
        $artikeldosen->bahasa = $request->input('bahasa');
        $artikeldosen->kategori = $request->input('kategori');
        $artikeldosen->tahun = $request->input('tahun');
        if (!empty($request->konten)) {
            $artikeldosen->konten = $dom->saveHTML();
        } else {
            $artikeldosen->konten = " - ";
        }
        $artikeldosen->author = $request->input('penulis');
        $artikeldosen->save();

        return redirect()->route('admin.artikeldosen.index', $request->input('bahasa'))->with('success', 'artikel dosen berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bahasa, $id)
    {

        $artikeldosen = Artikeldosen::find($id);
        return view('admin.artikeldosen.show')->with('artikeldosen', $artikeldosen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bahasa, $id)
    {

        $artikeldosen = Artikeldosen::find($id);
        return view('admin.artikeldosen.edit')->with('artikeldosen', $artikeldosen)->with('bahasa', $bahasa);
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
        if (!empty($request->konten)) {
            $storage = 'storage/artikeldosen';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            // $dom->loadHTML($request->konten, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            $dom->loadHTML($request->konten);
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
                        ->save($filepath);
                    $new_src = asset($filepath);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $new_src);
                    $img->setAttribute('class', 'img-fluid');
                }
            }
        }

        $artikeldosen = Artikeldosen::find($id);
        $artikeldosen->judul = $request->input('judul');
        $artikeldosen->bahasa = $request->input('bahasa');
        $artikeldosen->kategori = $request->input('kategori');
        $artikeldosen->tahun = $request->input('tahun');
        if (!empty($request->konten)) {
            $artikeldosen->konten = $dom->saveHTML();
        } else {
            $artikeldosen->konten = " - ";
        }
        $artikeldosen->author = $request->input('penulis');
        $artikeldosen->save();

        return redirect()->route('admin.artikeldosen.index', $request->input('bahasa'))->with('success', 'artikel dosen berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahasa = DB::table('artikeldosens')->where('id', $id)->get()->first()->bahasa;

        $artikeldosen = Artikeldosen::find($id);
        $artikeldosen->delete();

        return redirect()->route('admin.artikeldosen.index', $bahasa)->with('success', 'artikel dosen berhasil dihapus');
    }
}
