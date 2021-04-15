<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserMenutunggalController extends Controller
{
    public function index($bahasa, $slug)
    {
        // DATA NAVBAR
        if ($bahasa == 'en') {

            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->orderBy('created_at', 'DESC')
                ->get();
            $menutunggal = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->where('menutunggals.slug', $slug)
                ->get()
                ->first();
            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'english')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'english')->get();
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->orderBy('created_at', 'DESC')
                ->get();
            $menutunggal = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->where('menutunggals.slug', $slug)
                ->get()
                ->first();

            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'indonesia')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'indonesia')->get();
        }
        $sosial_medias = DB::table('sosialmedias')->get();

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();



        return view('user.menutunggal.index')
            ->with('sosial_medias', $sosial_medias)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('menutunggals', $menutunggals)
            ->with('menutunggal', $menutunggal)
            ->with('beritas', $beritas)
            ->with('pengumumans', $pengumumans)
            ->with('bahasa', $bahasa);
    }
}
