<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Menu;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('superadmin');
    // }
    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('superadmin')->only([
            // 'create' // Could add bunch of more methods too
        ]);
    }

    public function index()
    {

        // $menus = Menu::all()->orderBy('urutan', 'ASC');
        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();
        return view('admin.menu.index')
            ->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();


        return view('admin.menu.create')
            ->with('menus', $menus);
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
        $menu->slug = Str::slug($request->input('menu'));
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
    // public function edit($slug)
    public function edit($id)
    {

        $menus = DB::table('menus')
            ->orderBy('menus.urutan', 'ASC')
            ->get();

        $menu = DB::table('menus')
            ->where('menus.id', $id)
            ->get()
            ->first();

        return view('admin.menu.edit')
            ->with('menu', $menu)
            ->with('menus', $menus);
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
        $menu->slug = Str::slug($request->input('menu'));
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

        $contents = DB::table('contents')->where('menu_id', $id);
        if (!empty($contents)) {
            foreach ($contents as $content) {
                if (File::exists(public_path('storage/berita/' . $content->thumbnail))) {
                    File::delete(public_path('storage/berita/' . $content->thumbnail));
                    $content->delete();
                } else {
                    $content->delete();
                }
            }
        }
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'menu berhasil dihapus !!');
    }
}
