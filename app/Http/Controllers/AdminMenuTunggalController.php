<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Path\To\DOMdocument;
use Intervention\Image\ImageManagerStatic as Image;

use App\Models\Menutunggal;

class AdminMenuTunggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menutunggals = DB::table('menutunggals')->paginate(10);
        return view('admin.menutunggal.index')->with('menutunggals', $menutunggals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menutunggal.create');
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

        $menutunggal = new Menutunggal();
        $menutunggal->judul = $request->input('judul');
        $menutunggal->bahasa = $request->input('bahasa');
        if (!empty($request->konten)) {
            $menutunggal->konten = $dom->saveHTML();
        } else {
            $menutunggal->konten = " - ";
        }
        $menutunggal->author = Auth::user()->name;
        $menutunggal->save();

        return redirect()->route('admin.menutunggal.index')->with('success', 'menu berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menutunggal = Menutunggal::find($id);
        return view('admin.menutunggal.show')->with('menutunggal', $menutunggal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menutunggal = Menutunggal::find($id);
        return view('admin.menutunggal.edit')->with('menutunggal', $menutunggal);
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
            $storage = 'storage/menutunggal';
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

        $menutunggal = Menutunggal::find($id);
        $menutunggal->judul = $request->input('judul');
        $menutunggal->bahasa = $request->input('bahasa');
        if (!empty($request->konten)) {
            $menutunggal->konten = $dom->saveHTML();
        } else {
            $menutunggal->konten = " - ";
        }
        $menutunggal->author = Auth::user()->name;
        $menutunggal->save();

        return redirect()->route('admin.menutunggal.index')->with('success', 'menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menutunggal = Menutunggal::find($id);
        $menutunggal->delete();

        return redirect()->route('admin.menutunggal.index')->with('success', 'menu berhasil dihapus');
    }
}
