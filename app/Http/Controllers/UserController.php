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
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
        }

        $contents = DB::table('contents')
            ->leftJoin('menus', 'contents.menu_id', 'menus.id')
            ->orderBy('contents.urutan')
            ->get();

        // DATA NAVBAR END

        return view('user.beranda')
            ->with('menus', $menus)
            ->with('contents', $contents)
            ->with('bahasa', $bahasa);
    }

    public function content($bahasa, $menu, $judul)
    {

        if ($bahasa == 'en') {
            $menus = DB::table('menus')->where('menus.bahasa', 'english')->orderBy('menus.urutan')->get();
        } else {
            $menus = DB::table('menus')->where('menus.bahasa', 'indonesia')->orderBy('menus.urutan')->get();
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
            ->with('menus', $menus)
            ->with('content', $content)
            ->with('contents', $contents)
            ->with('bahasa', $bahasa);
    }
}
