<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Path\To\DOMdocument;
use Intervention\Image\ImageManagerStatic as Image;

class AdminContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($bahasa, $menu_id)
    {
        if ($menu_id == 'daftar-content') {
            $menu = DB::table('menus')
                ->where('bahasa', $bahasa)
                ->orderBy('menus.urutan', 'ASC')
                ->get()
                ->first();

            return redirect()->route('admin.content.index', [$bahasa, $menu->id]);
        } else {
            // $menu_id = DB::table('menus')->where('id', $menu_id)->get()->first()->id;

            $contents = DB::table('contents')
                ->leftJoin('menus', 'contents.menu_id', 'menus.id')
                ->where('menus.bahasa', $bahasa)
                ->where('contents.menu_id', $menu_id)
                ->select('contents.urutan', 'menus.menu', 'menus.bahasa', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
                ->orderBy('menus.menu', 'ASC')
                ->orderBy('contents.urutan', 'ASC')
                ->paginate(10);
        }


        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        return view('admin.content.index')
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('urutan', 'ASC')
            ->get();

        return view('admin.content.create')->with('contents', $contents)
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!empty($request->kontent)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->kontent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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

        $content = new Content();
        $content->urutan = $request->input('urutan');
        if ($request->input('menu_id') == 'kosong') {
            $content->menu_id = NULL;
        } else {
            $content->menu_id = $request->input('menu_id');
        }
        $content->judul = $request->input('judul');
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
        }

        return redirect()->route('admin.content.index', ['indonesia', $request->input('menu_id')])
            ->with('success', 'konten berhasil dibuat !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bahasa, $menu, $judul)
    {
        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('urutan', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.urutan', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get();

        $content = DB::table('contents')
            ->where('contents.judul', $judul)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.id', 'contents.kontent', 'contents.urutan', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get()
            ->first();

        return view('admin.content.show')->with('contents', $contents)->with('content', $content)
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bahasa, $menu, $judul)
    {
        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $contents = DB::table('contents')
            ->orderBy('urutan', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.urutan', 'menus.menu', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get();

        $content = DB::table('contents')
            ->where('contents.judul', $judul)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('contents.id', 'contents.kontent', 'contents.urutan', 'menus.menu', 'menus.bahasa', 'contents.judul', 'contents.created_at', 'contents.author')
            ->get()
            ->first();

        return view('admin.content.edit')->with('contents', $contents)
            ->with('content', $content)
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
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
        if (!empty($request->kontent)) {
            $storage = 'storage/content';
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($request->kontent, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
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

        $content = Content::find($id);
        $content->menu_id = $request->input('menu_id');
        $content->judul = $request->input('judul');
        $content->urutan = $request->input('urutan');
        $content->kontent = $request->input('kontent');
        if (!empty($request->kontent)) {
            $content->kontent = $dom->saveHTML();
        } else {
            $content->kontent = " - ";
        }
        $content->author = Auth::user()->name;
        $content->save();

        $menu = DB::table('menus')->where('menus.id', $request->input('menu_id'))->get()->first()->menu;

        return redirect()->route('admin.content.index', ['indonesia', $request->input('menu_id')])
            ->with('success', 'konten berhasil diedit !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = DB::table('contents')
            ->where('contents.id', $id)
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->get()
            ->first();

        $content = Content::find($id);
        $content->delete();

        return redirect()->route('admin.content.index', ['indonesia', $menu->id])->with('success', 'konten berhasil dihapus !!');
    }
}
