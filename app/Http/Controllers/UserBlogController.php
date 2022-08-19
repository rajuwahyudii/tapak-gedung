<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserBlogController extends Controller
{
    public function index($kategori)
    {
        $menus = DB::table('menus')->orderBy('menus.urutan')->get();
        $posts = DB::table('contents')
            ->orderBy('created_at', 'desc')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('menus.slug', $kategori)
            ->where('contents.status', 'aktif')
            ->select('contents.created_at', 'contents.thumbnail', 'menus.menu', 'menus.slug as menu_slug', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.kontent', 'contents.slug', 'contents.created_at', 'contents.author')
            ->paginate(3);

        $menu = DB::table('menus')
            ->where('menus.slug', $kategori)
            ->get()
            ->first();

        $posts_terbaru = DB::table('contents')
            ->orderBy('created_at', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('contents.status', 'aktif')
            ->select('menus.slug as menu_slug', 'contents.created_at', 'contents.thumbnail', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->take(4)
            ->get();

        $wisatas = DB::table('wisatas')
            ->orderBy('urutan', 'ASC')
            ->get();

        return view('user.blog.index')
            ->with('posts', $posts)
            ->with('posts_terbaru', $posts_terbaru)
            ->with('wisatas', $wisatas)
            ->with('menu', $menu)
            ->with('kategori', $kategori)
            ->with('menus', $menus);
    }

    public function show($kategori, $slug)
    {
        $menus = DB::table('menus')->orderBy('menus.urutan')->get();

        $posts = DB::table('contents')
            ->orderBy('created_at', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('contents.status', 'aktif')
            ->where('menus.slug', $kategori)
            ->select('contents.kontent', 'contents.created_at', 'contents.thumbnail', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->get();

        $konten = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('menus.slug', $kategori)
            ->where('contents.slug', $slug)
            ->where('contents.status', 'aktif')
            ->select('contents.created_at', 'contents.kontent', 'contents.thumbnail', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->get()
            ->first();

        $posts_terbaru = DB::table('contents')
            ->orderBy('created_at', 'ASC')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('contents.status', 'aktif')
            ->select('menus.slug as menu_slug', 'contents.kontent', 'contents.created_at', 'contents.thumbnail', 'menus.menu', 'menus.id as menu_id', 'menus.bahasa', 'contents.judul', 'contents.slug', 'contents.created_at', 'contents.author')
            ->take(3)
            ->get();

        $wisatas = DB::table('wisatas')
            ->orderBy('urutan', 'ASC')
            ->get();

        return view('user.blog.show')
            ->with('konten', $konten)
            ->with('posts', $posts)
            ->with('wisatas', $wisatas)
            ->with('posts_terbaru', $posts_terbaru)
            ->with('kategori', $kategori)
            ->with('menus', $menus);
    }

    public function wisata($slug)
    {
        $menus = DB::table('menus')->orderBy('menus.urutan')->get();
        $konten = DB::table('wisatas')
            ->where('wisatas.slug', $slug)
            ->get()
            ->first();
        $wisatas = DB::table('wisatas')
            ->orderBy('urutan', 'ASC')
            ->get();
        $artikel_terkaits = DB::table('contents')
            ->where('contents.wisata_id', $konten->id)
            ->where('contents.status', 'aktif')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan', 'ASC')
            ->select('menus.slug as menu_slug', 'contents.slug', 'contents.judul', 'contents.kontent', 'contents.thumbnail', 'contents.created_at')
            ->paginate(3);
        $wisata_id = $konten->id;
        $galeris = DB::table('galeris')->where('wisata_id', $wisata_id)->get();
        return view('user.blog.wisata')
            ->with('wisatas', $wisatas)
            ->with('konten', $konten)
            ->with('artikel_terkaits', $artikel_terkaits)
            ->with('menus', $menus)
            ->with('galeris', $galeris);
    }
}
