<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Path\To\DOMdocument;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Wisata;

class AdminWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('superadmin');
        // $this->middleware('superadmin')->only([
        //     //         // 'create' // Could add bunch of more methods too
        // ]);
    }
    // public function __construct()
    // {
    //     // Middleware only applied to these methods
    //     $this->middleware('superadmin')->only([
    //         // 'create' // Could add bunch of more methods too
    //     ]);
    // }

    public function index()
    {

        // $wisata = Menu::all()->orderBy('urutan', 'ASC');
        $wisatas = DB::table('wisatas')
            ->orderBy('wisatas.urutan', 'ASC')
            ->get();

        return view('admin.wisata.index')
            ->with('wisatas', $wisatas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisatas = DB::table('wisatas')
            ->orderBy('wisatas.urutan', 'ASC')
            ->get();


        return view('admin.wisata.create')
            ->with('wisatas', $wisatas);
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
            $request->file('thumbnail')->move('storage/berita/', $thumbnailName);
        } else {
            $thumbnailName = 'default.png';
        }

        if (!empty($request->konten)) {
            $storage = 'storage/content';
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

        $wisata = new Wisata();
        $wisata->urutan = $request->input('urutan');
        $wisata->wisata = $request->input('wisata');
        $wisata->thumbnail = $thumbnailName;
        $wisata->slug = Str::slug($request->input('wisata'));
        if (!empty($request->konten)) {
            $wisata->konten = $dom->saveHTML();
        } else {
            $wisata->konten = " - ";
        }
        $wisata->save();

        return redirect()->route('admin.wisata.index')->with('success', 'wisata  berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::find($id);
        $galeris = DB::table('galeris')->where('wisata_id', $id)->get();
        return view('admin.wisata.show')->with('wisata', $wisata)->with('galeris', $galeris);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($wisata)
    {
        $wisata = DB::table('wisatas')
            ->where('wisata', $wisata)
            ->get()
            ->first();

        return view('admin.wisata.edit')
            ->with('wisata', $wisata);
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
            $request->file('thumbnail')->move('storage/berita/', $thumbnailName);
        } else {
            $thumbnailName = 'default.png';
        }

        if (!empty($request->konten)) {
            $storage = 'storage/content';
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

        $wisata = Wisata::find($id);
        $wisata->urutan = $request->input('urutan');
        $wisata->wisata = $request->input('wisata');
        $wisata->thumbnail = $thumbnailName;
        $wisata->slug = Str::slug($request->input('wisata'));
        if (!empty($request->konten)) {
            $wisata->konten = $dom->saveHTML();
        } else {
            $wisata->konten = " - ";
        }
        $wisata->save();

        return redirect()->route('admin.wisata.index')->with('success', 'wisata  berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('contents')->where('wisata_id', $id)->update(array('wisata_id' => null));

        $wisata = Wisata::find($id);
        if (File::exists(public_path('storage/berita/' . $wisata->thumbnail))) {
            if ($wisata->thumbnail != 'default.png') {
                File::delete(public_path('storage/berita/' . $wisata->thumbnail));
            }
        }
        $wisata->delete();

        return redirect()->route('admin.wisata.index')->with('success', 'wisata berhasil dihapus !!');
    }
}
