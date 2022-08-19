<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Youtube;

class UserController extends Controller
{
    public function index()
    {
        // DATA NAVBAR
        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();
        $menus = DB::table('menus')->orderBy('menus.urutan')->get();
        $wisatas = DB::table('wisatas')->orderBy('wisatas.urutan')->get();
        // DATA NAVBAR END
        $objek_wisata = DB::table('wisatas')->orderBy('wisatas.urutan')->get()->first();
        $artikel_terbarus = DB::table('contents')
            ->whereNotNull('contents.wisata_id')
            ->where('contents.status', 'aktif')
            ->orderBy('contents.created_at', 'desc')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->leftJoin('wisatas', 'contents.wisata_id', 'wisatas.id')
            ->select('wisatas.wisata', 'menus.slug as menu_slug', 'menus.menu', 'contents.slug', 'contents.judul', 'contents.kontent', 'contents.thumbnail', 'contents.created_at')
            ->take(3)
            ->get();
        $artikel_lainnyas = DB::table('contents')
            ->whereNull('contents.wisata_id')
            ->where('contents.status', 'aktif')
            ->orderBy('contents.created_at', 'desc')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->select('menus.slug as menu_slug', 'menus.menu', 'contents.slug', 'contents.judul', 'contents.kontent', 'contents.thumbnail', 'contents.created_at')
            ->take(4)
            ->get();

        // $galeris =  DB::table('contents')
        //     ->whereNotNull('contents.wisata_id')
        //     ->orderBy('contents.created_at', 'desc')
        //     ->leftJoin('menus', 'contents.menu_id', 'menus.id')
        //     ->select('contents.thumbnail')
        //     ->take(6)
        //     ->get();
        $galeris = DB::table('galeris')->get()->take(6);

        $youtube = Youtube::first();

        return view('user.beranda')
            ->with('youtube', $youtube)
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('wisatas', $wisatas)
            ->with('objek_wisata', $objek_wisata)
            ->with('artikel_terbarus', $artikel_terbarus)
            ->with('galeris', $galeris)
            ->with('artikel_lainnyas', $artikel_lainnyas);
    }

    // public function content($bahasa, $menu, $slug)
    // {

    //     if ($bahasa == 'en') {

    //         $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();

    //         $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'english')->get();
    //         $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'english')->get();
    //         $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'english')->get();
    //         $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'english')->get();
    //         $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'english')->get();
    //         $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'english')->get();
    //         $menutunggals = DB::table('menutunggals')
    //             ->where('bahasa', 'english')
    //             ->get();
    //     } else {
    //         $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
    //         $beritas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'berita')->where('bahasa', 'indonesia')->get();
    //         $pengumumans = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'pengumuman')->where('bahasa', 'indonesia')->get();
    //         $events = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'acara')->where('bahasa', 'indonesia')->get();
    //         $beasiswas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'beasiswa')->where('bahasa', 'indonesia')->get();
    //         $lowongankerjas = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'lowongankerja')->where('bahasa', 'indonesia')->get();
    //         $bukurekomedasis = DB::table('beritas')->orderBy('created_at', 'DESC')->where('kategori', 'bukurekomendasi')->where('bahasa', 'indonesia')->get();
    //         $menutunggals = DB::table('menutunggals')
    //             ->where('bahasa', 'indonesia')
    //             ->get();
    //     }
    //     $sosial_medias = DB::table('sosialmedias')->get();
    //     $membershipakreditasis = DB::table('membershipakreditasis')->get();
    //     $contents = DB::table('contents')
    //         ->leftJoin('menus', 'contents.menu_id', 'menus.id')
    //         ->orderBy('contents.urutan')
    //         ->get();

    //     $content = DB::table('contents')
    //         ->leftJoin('menus', 'contents.menu_id', 'menus.id')
    //         ->where('menus.menu', $menu)
    //         ->where('contents.slug', $slug)
    //         ->get()
    //         ->first();
    //     $wisatas = DB::table('wisatas')->orderBy('wisatas.urutan')->get();

    //     return view('user.content')
    //         ->with('sosial_medias', $sosial_medias)
    //         ->with('membershipakreditasis', $membershipakreditasis)
    //         ->with('menutunggals', $menutunggals)
    //         ->with('menus', $menus)
    //         ->with('contents', $contents)
    //         ->with('beritas', $beritas)
    //         ->with('pengumumans', $pengumumans)
    //         ->with('events', $events)
    //         ->with('beasiswas', $beasiswas)
    //         ->with('lowongankerjas', $lowongankerjas)
    //         ->with('bukurekomedasis', $bukurekomedasis)
    //         ->with('content', $content)
    //         ->with('bahasa', $bahasa)
    //         ->with('wisatas', $wisatas);
    // }
}
