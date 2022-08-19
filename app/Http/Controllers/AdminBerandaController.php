<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\Youtube;

class AdminBerandaController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('superadmin')->only([
            'youtube'  // Could add bunch of more methods too
        ]);
    }

    public function index()
    {
        $youtubes = Youtube::all();
        if ($youtubes->isEmpty()) {
            $youtube = 'kosong';
        } else {
            $youtube = Youtube::first();
        }

        return view('admin.beranda.index')->with('youtube', $youtube);
    }

    // public function youtube()
    public function youtube(Request $request, $id)
    {
        $youtube = Youtube::find($id);
        $youtube->link = $request->input('link');
        $youtube->save();

        return redirect()->route('admin.beranda.index')->with('success', 'youtube berhasil diedit !');
    }
}
