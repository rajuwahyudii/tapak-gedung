<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserBeritaController extends Controller
{
    public function index($bahasa, $kategori)
    {
        // DATA NAVBAR

        if ($bahasa == 'en') {

            $beritas = DB::table('beritas')->where('beritas.bahasa', 'english')->where('beritas.kategori', $kategori)->orderBy('created_at', 'DESC')->paginate(4);
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->orderBy('created_at', 'DESC')
                ->get();
        } else {
            $beritas = DB::table('beritas')->where('bahasa', 'indonesia')->where('beritas.kategori', $kategori)->orderBy('created_at', 'DESC')->paginate(4);
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        $sosial_medias = DB::table('sosialmedias')->get();
        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        // DATA NAVBAR END

        return view('user.berita.index')
            ->with('sosial_medias', $sosial_medias)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('menutunggals', $menutunggals)
            ->with('beritas', $beritas)
            ->with('bahasa', $bahasa);
    }

    public function show($bahasa, $kategori, $konten)
    {
        // DATA NAVBAR
        if ($bahasa == 'en') {
            $berita = DB::table('beritas')
                ->where('beritas.bahasa', 'english')
                ->where('beritas.judul', $konten)
                ->get()
                ->first();

            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->orderBy('created_at', 'DESC')
                ->get();
        } else {

            $berita = DB::table('beritas')
                ->where('beritas.bahasa', 'indonesia')
                ->where('beritas.judul', $konten)
                ->get()
                ->first();

            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->orderBy('created_at', 'DESC')
                ->where('bahasa', 'indonesia')
                ->get();
        }
        $sosial_medias = DB::table('sosialmedias')->get();
        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();
        // DATA NAVBAR END

        return view('user.berita.show')
            ->with('sosial_medias', $sosial_medias)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('menutunggals', $menutunggals)
            ->with('berita', $berita)
            ->with('bahasa', $bahasa);
    }
}
