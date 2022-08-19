<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Galeri;

class AdminGaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($wisata_id)
    {
        $galeris = DB::table('galeris')
            ->leftJoin('wisatas', 'galeris.wisata_id', 'wisatas.id')
            ->where('galeris.wisata_id', $wisata_id)
            ->select('galeris.id', 'galeris.gambar', 'wisatas.wisata')
            ->get();
        $wisata = DB::table('wisatas')->where('wisatas.id', $wisata_id)->get()->first();
        return view('admin.galeri.index')->with('galeris', $galeris)->with('wisata', $wisata);
    }
    public function create($wisata_id)
    {
        $wisata = DB::table('wisatas')->where('wisatas.id', $wisata_id)->get()->first();
        return view('admin.galeri.create')->with('wisata', $wisata);
    }
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $gambarName = time() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('storage/berita/', $gambarName);
        } else {
            $gambarName = 'default.png';
        }
        $galeri = new Galeri();
        $galeri->gambar = $gambarName;
        $galeri->wisata_id = $request->input('wisata_id');
        $galeri->save();

        return redirect()->route('admin.galeri.index', $request->input('wisata_id'))
            ->with('success', 'Gambar berhasil di tambahkan !!');
    }
    public function destroy($wisata_id, $id)
    {
        $galeri = Galeri::find($id);
        if (File::exists(public_path('storage/berita/' . $galeri->gambar))) {
            if ($galeri->gambar != 'default.png') {
                File::delete(public_path('storage/berita/' . $galeri->gambar));
            }
        }
        $galeri->delete();
        return redirect()->route('admin.galeri.index', $wisata_id)
            ->with('success', 'Gambar Berhasil Di Hapus !!');
    }
}
