<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\DB;

class UserArtikeldosenController extends Controller
{
    public function index($bahasa)
    {

        if ($bahasa == 'en') {

            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'english')->orderBy('created_at')->paginate(8);
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $artikeldosens = DB::table('artikeldosens')->where('bahasa', 'indonesia')->orderBy('created_at')->paginate(8);
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        return view('user.artikeldosen.index')
            ->with('contents', $contents)
            ->with('menus', $menus)
            ->with('menutunggals', $menutunggals)
            ->with('artikeldosens', $artikeldosens)
            ->with('bahasa', $bahasa);
    }

    public function show($bahasa, $judul)
    {

        if ($bahasa == 'en') {

            $artikeldosen = DB::table('artikeldosens')->where('judul', $judul)->where('bahasa', 'english')->get()->first();
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'english')
                ->get();
        } else {
            $artikeldosen = DB::table('artikeldosens')->where('judul', $judul)->where('bahasa', 'indonesia')->get()->first();
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
            $menutunggals = DB::table('menutunggals')
                ->where('bahasa', 'indonesia')
                ->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        return view('user.artikeldosen.show')
            ->with('contents', $contents)
            ->with('menus', $menus)
            ->with('menutunggals', $menutunggals)
            ->with('artikeldosen', $artikeldosen)
            ->with('bahasa', $bahasa);
    }
}
