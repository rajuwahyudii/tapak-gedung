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

            $beritas = DB::table('beritas')->where('bahasa', 'english')->where('beritas.kategori', $kategori)->orderBy('created_at')->paginate(4);
            $menus = DB::table('menus')->where('beritas.menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $beritas = DB::table('beritas')->where('bahasa', 'indonesia')->where('beritas.kategori', $kategori)->orderBy('created_at')->paginate(4);
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        // DATA NAVBAR END

        return view('user.berita.index')
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
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();
        // DATA NAVBAR END

        $berita = DB::table('beritas')
            ->where('beritas.judul', $konten)
            ->get()
            ->first();

        return view('user.berita.show')
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('menutunggals', $menutunggals)
            ->with('berita', $berita)
            ->with('bahasa', $bahasa);
    }
}
