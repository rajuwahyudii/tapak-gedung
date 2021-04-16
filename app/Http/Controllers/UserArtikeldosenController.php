<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\DB;

class UserArtikeldosenController extends Controller
{
    public function index($bahasa, $kategori)
    {

        if ($bahasa == 'en') {

            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'english')->where('kategori', $kategori)->orderBy('created_at', 'DESC')->get();
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'indonesia')->where('kategori', $kategori)->orderBy('created_at', 'DESC')->get();
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }
        $sosial_medias = DB::table('sosialmedias')->get();
        $membershipakreditasis = DB::table('membershipakreditasis')->get();
        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        switch ($kategori) {
            case 'tesis':
                return view('user.tesis.index')
                    ->with('sosial_medias', $sosial_medias)
                    ->with('membershipakreditasis', $membershipakreditasis)
                    ->with('contents', $contents)
                    ->with('menus', $menus)
                    ->with('menutunggals', $menutunggals)
                    ->with('artikeldosens', $artikeldosens)
                    ->with('bahasa', $bahasa);
                break;
            case 'disertasi':
                return view('user.disertasi.index')
                    ->with('sosial_medias', $sosial_medias)
                    ->with('membershipakreditasis', $membershipakreditasis)
                    ->with('contents', $contents)
                    ->with('menus', $menus)
                    ->with('menutunggals', $menutunggals)
                    ->with('artikeldosens', $artikeldosens)
                    ->with('bahasa', $bahasa);
                break;
            case 'artikeldosen':
                return view('user.artikeldosen.index')
                    ->with('sosial_medias', $sosial_medias)
                    ->with('membershipakreditasis', $membershipakreditasis)
                    ->with('contents', $contents)
                    ->with('menus', $menus)
                    ->with('menutunggals', $menutunggals)
                    ->with('artikeldosens', $artikeldosens)
                    ->with('bahasa', $bahasa);
                break;

            default:
                return view('user.artikeldosen.index')
                    ->with('sosial_medias', $sosial_medias)
                    ->with('membershipakreditasis', $membershipakreditasis)
                    ->with('contents', $contents)
                    ->with('menus', $menus)
                    ->with('menutunggals', $menutunggals)
                    ->with('artikeldosens', $artikeldosens)
                    ->with('bahasa', $bahasa);
                break;
        }
    }

    public function show($bahasa, $kategori, $slug)
    {

        if ($bahasa == 'en') {

            $artikeldosen = DB::table('artikeldosens')->where('slug', $slug)->where('bahasa', 'english')->get()->first();
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $artikeldosen = DB::table('artikeldosens')->where('slug', $slug)->where('bahasa', 'indonesia')->get()->first();
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }
        $sosial_medias = DB::table('sosialmedias')->get();
        $membershipakreditasis = DB::table('membershipakreditasis')->get();

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        return view('user.artikeldosen.show')
            ->with('sosial_medias', $sosial_medias)
            ->with('membershipakreditasis', $membershipakreditasis)
            ->with('contents', $contents)
            ->with('menus', $menus)
            ->with('menutunggals', $menutunggals)
            ->with('artikeldosen', $artikeldosen)
            ->with('bahasa', $bahasa);
    }
}
