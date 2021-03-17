<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMenuTunggalController extends Controller
{
    public function index($bahasa, $judul)
    {
        // DATA NAVBAR
        if ($bahasa == 'en') {
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
            $beritas = DB::table('beritas')->orderBy('created_at')->where('kategori', 'berita')->where('bahasa', 'english')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at')->where('kategori', 'pengumuman')->where('bahasa', 'english')->get();
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();

            $beritas = DB::table('beritas')->orderBy('created_at')->where('kategori', 'berita')->where('bahasa', 'indonesia')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at')->where('kategori', 'pengumuman')->where('bahasa', 'indonesia')->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        $menutunggal = DB::table('menutunggals')
            ->where('menutunggals.judul', $judul)
            ->get()
            ->first();

        return view('user.menutunggal.index')
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('menutunggals', $menutunggals)
            ->with('menutunggal', $menutunggal)
            ->with('beritas', $beritas)
            ->with('pengumumans', $pengumumans)
            ->with('bahasa', $bahasa);
    }
}
