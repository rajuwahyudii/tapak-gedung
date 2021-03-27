<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // $menus = Menu::all()->orderBy('urutan', 'ASC');
        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        return view('admin.menu.index')
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        return view('admin.menu.create')
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->urutan = $request->input('urutan');
        $menu->bahasa = $request->input('bahasa');
        $menu->menu = $request->input('menu');
        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'menu  berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($menu)
    {

        $indonesia_menus = DB::table('menus')
            ->where('menus.bahasa', 'indonesia')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $english_menus = DB::table('menus')
            ->where('menus.bahasa', 'english')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $menu = DB::table('menus')
            ->where('menu', $menu)
            ->get()
            ->first();

        return view('admin.menu.edit')
            ->with('menu', $menu)
            ->with('indonesia_menus', $indonesia_menus)
            ->with('english_menus', $english_menus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->urutan = $request->input('urutan');
        $menu->bahasa = $request->input('bahasa');
        $menu->menu = $request->input('menu');
        $menu->status = $request->input('status');
        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'menu  berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        $contents = DB::table('contents')->where('menu_id', $id);
        // if (!empty($contents)) {
        //     foreach ($contents as $content) {
        //         $content->delete();
        //     }
        // }
        $contents->delete();

        return redirect()->route('admin.menu.index')->with('success', 'menu berhasil dihapus !!');
    }
}
