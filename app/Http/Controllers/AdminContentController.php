<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Path\To\DOMdocument;
use Intervention\Image\ImageManagerStatic as Image;

class AdminContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('superadmin')->only([
            'status'  // Could add bunch of more methods too
        ]);
    }


    public function index($menu_id)
    {
        if ($menu_id == 'daftar-content') {
            $menu = DB::table('menus')
                ->orderBy('menus.urutan', 'ASC')
                ->get()
                ->first();

            if (!empty($menu)) {
                $id_menu = $menu->id;
            } else {
                $id_menu = '1';
            }

            return redirect()->route('admin.content.index', $id_menu);
        } else {
            // $menu_id = DB::table('menus')->where('id', $menu_id)->get()->first()->id;

            $contents = DB::table('contents')
                ->leftJoin('menus', 'contents.menu_id', 'menus.id')
                ->where('contents.menu_id', $menu_id)
                ->select('contents.status', 'contents.created_at', 'menus.menu', 'menus.bahasa', 'menus.bahasa', 'contents.id', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
                ->orderBy('menus.menu', 'ASC')
                ->orderBy('contents.created_at', 'DESC')
                ->paginate(10);
        }


        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        return view('admin.content.index')
            ->with('menus', $menus)
            ->with('contents', $contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('urutan', 'ASC')
            ->get();

        $wisatas = DB::table('wisatas')
            ->orderBy('wisatas.urutan', 'ASC')
            ->get();

        return view('admin.content.create')
            ->with('contents', $contents)
            ->with('wisatas', $wisatas)
            ->with('menus', $menus);
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

        if (!empty($request->kontent)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            // $dom->loadHTML($request->kontent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            $dom->loadHTML($request->kontent);
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

        if ($request->input('wisata_id' == 'kosong')) {
            $wisata_id = null;
        } else {
            $wisata_id = $request->input('wisata_id');
        }


        $content = new Content();
        $content->urutan = $request->input('urutan');
        if ($request->input('menu_id') == 'kosong') {
            $content->menu_id = NULL;
        } else {
            $content->menu_id = $request->input('menu_id');
        }
        $content->thumbnail = $thumbnailName;
        $content->judul = $request->input('judul');
        $content->slug = Str::slug($request->input('judul'));
        if (!empty($request->kontent)) {
            $content->kontent = $dom->saveHTML();
        } else {
            $content->kontent = " - ";
        }
        $content->status = 'draf';
        $content->author = Auth::user()->name;
        $content->wisata_id = $wisata_id;
        $content->save();

        if ($request->input('menu_id') == 'kosong') {
            $menu = 'daftar-content';
        } else {
            $menu = DB::table('menus')->where('menus.id', $request->input('menu_id'))->get()->first()->menu;
            $menu_bahasa = DB::table('menus')->where('menus.id', $request->input('menu_id'))->get()->first()->bahasa;
        }

        return redirect()->route('admin.content.index', $request->input('menu_id'))
            ->with('success', 'konten berhasil dibuat !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($menu, $id)
    {

        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('created_at', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.status', 'contents.created_at', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->get();

        $content = DB::table('contents')
            ->where('contents.id', $id)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->leftJoin('wisatas', 'contents.wisata_id', 'wisatas.id')
            ->select('wisatas.id', 'wisatas.wisata', 'contents.status', 'contents.id', 'contents.thumbnail', 'contents.kontent', 'contents.created_at', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->get()
            ->first();


        return view('admin.content.show')->with('contents', $contents)->with('content', $content)
            ->with('menus', $menus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($menu, $id)
    {
        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('created_at', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.status', 'contents.created_at', 'menus.menu', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get();

        $content = DB::table('contents')
            ->where('contents.id', $id)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->leftJoin('wisatas', 'contents.wisata_id', 'wisatas.id')
            ->select('contents.wisata_id', 'contents.status', 'contents.id', 'contents.kontent', 'contents.created_at', 'menus.menu', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get()
            ->first();

        $wisatas = DB::table('wisatas')
            ->orderBy('wisatas.urutan', 'ASC')
            ->get();

        return view('admin.content.edit')->with('contents', $contents)
            ->with('content', $content)
            ->with('menus', $menus)
            ->with('wisatas', $wisatas);
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

        if (!empty($request->kontent)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            // $dom->loadHTML($request->kontent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
            $dom->loadHTML($request->kontent);
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

        if ($request->input('wisata_id' == 'kosong')) {
            $wisata_id = null;
        } else {
            $wisata_id = $request->input('wisata_id');
        }

        $content = Content::find($id);
        $content->menu_id = $request->input('menu_id');
        $content->wisata_id = $wisata_id;
        $content->status = 'draf';
        $content->judul = $request->input('judul');
        $content->slug = Str::slug($request->input('judul'));
        $content->thumbnail = $thumbnailName;
        $content->urutan = $request->input('urutan');
        $content->kontent = $request->input('kontent');
        if (!empty($request->kontent)) {
            $content->kontent = $dom->saveHTML();
        } else {
            $content->kontent = " - ";
        }
        $content->author = Auth::user()->name;
        $content->save();

        if ($request->input('menu_id') == 'kosong') {
            $menu = 'daftar-content';
        } else {
            $menu = DB::table('menus')->where('menus.id', $request->input('menu_id'))->get()->first()->menu;
            $menu_bahasa = DB::table('menus')->where('menus.id', $request->input('menu_id'))->get()->first()->bahasa;
        }

        return redirect()->route('admin.content.index', $request->input('menu_id'))
            ->with('success', 'konten berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $content = Content::find($id);

        if ($content->status == 'draf') {
            $status = 'aktif';
        } else {
            $status = 'draf';
        }

        $content->status = $status;
        $content->save();

        return redirect()->route('admin.content.index',  $content->menu_id)
            ->with('success', 'status konten berhasil di ubah !!');
    }

    public function destroy($id)
    {
        $menu = DB::table('contents')
            ->where('contents.id', $id)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->get()
            ->first();

        $content = Content::find($id);
        if (File::exists(public_path('storage/berita/' . $content->thumbnail))) {
            if ($content->thumbnail != 'default.png') {
                File::delete(public_path('storage/berita/' . $content->thumbnail));
            }
        }
        $content->delete();

        return redirect()->route('admin.content.index', $menu->id)->with('success', 'konten berhasil dihapus !!');
    }
}
