<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($bahasa)
    {
        // DATA NAVBAR

        if ($bahasa == 'en') {
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $sliders = DB::table('sliders')->where('sliders.bahasa', 'english')->orderBy('created_at', 'DESC')->get();

            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'english')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'english')->get();
            $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'english')->get();
            $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'english')->get();
            $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'english')->get();
            $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'english')->get();

            $berandakonten = DB::table('berandakontens')
                ->where('bahasa', 'english')
                ->get()
                ->first();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $sliders = DB::table('sliders')->where('sliders.bahasa', 'indonesia')->orderBy('created_at', 'DESC')->get();
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();

            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'indonesia')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'indonesia')->get();
            $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'indonesia')->get();
            $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'indonesia')->get();
            $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'indonesia')->get();
            $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'indonesia')->get();

            $berandakonten = DB::table('berandakontens')
                ->where('bahasa', 'indonesia')
                ->get()
                ->first();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        // DATA NAVBAR END

        return view('user.beranda')
            ->with('menutunggals', $menutunggals)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('sliders', $sliders)
            ->with('beritas', $beritas)
            ->with('pengumumans', $pengumumans)
            ->with('events', $events)
            ->with('beasiswas', $beasiswas)
            ->with('lowongankerjas', $lowongankerjas)
            ->with('bukurekomedasis', $bukurekomedasis)
            ->with('berandakonten', $berandakonten)
            ->with('bahasa', $bahasa);
    }

    public function content($bahasa, $menu, $judul)
    {

        if ($bahasa == 'en') {
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();

            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'english')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'english')->get();
            $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'english')->get();
            $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'english')->get();
            $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'english')->get();
            $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'english')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'indonesia')->get();
            $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'indonesia')->get();
            $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'indonesia')->get();
            $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'indonesia')->get();
            $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'indonesia')->get();
            $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'indonesia')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        $content = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->where('menus.menu', $menu)
            ->where('contents.judul', $judul)
            ->get()
            ->first();

        return view('user.content')
            ->with('menutunggals', $menutunggals)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('beritas', $beritas)
            ->with('pengumumans', $pengumumans)
            ->with('events', $events)
            ->with('beasiswas', $beasiswas)
            ->with('lowongankerjas', $lowongankerjas)
            ->with('bukurekomedasis', $bukurekomedasis)
            ->with('content', $content)
            ->with('bahasa', $bahasa);
    }
}
