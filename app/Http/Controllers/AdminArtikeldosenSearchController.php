<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminArtikeldosenSearchController extends Controller
{
    public function artikeldosen(Request $request)
    {
        $bahasa = $request->input('bahasa');
        $artikeldosens = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', $request->input('kategori'))
            ->where('tahun', 'LIKE', '%' . $request->input('artikeldosen') . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $tesises = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'tesis')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $disertasis = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'disertas')
            ->orderBy('created_at', 'DESC')->paginate(5);

        return view('admin.artikeldosen.index')
            ->with('bahasa', $bahasa)
            ->with('tesises', $tesises)
            ->with('disertasis', $disertasis)
            ->with('artikeldosens', $artikeldosens);
    }
    public function tesis(Request $request)
    {
        $bahasa = $request->input('bahasa');
        $tesises = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', $request->input('kategori'))
            ->where('tahun', 'LIKE', '%' . $request->input('search') . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $artikeldosens = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'artikeldosen')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $disertasis = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'disertas')
            ->orderBy('created_at', 'DESC')->paginate(5);

        return view('admin.artikeldosen.index')
            ->with('bahasa', $bahasa)
            ->with('tesises', $tesises)
            ->with('disertasis', $disertasis)
            ->with('artikeldosens', $artikeldosens);
    }
    public function disertasi(Request $request)
    {
        $bahasa = $request->input('bahasa');

        $disertasis = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', $request->input('kategori'))
            ->where('tahun', 'LIKE', '%' . $request->input('search') . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $artikeldosens = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'artikeldosen')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        $tesises = DB::table('artikeldosens')
            ->where('bahasa', $request->input('bahasa'))
            ->where('kategori', 'tesis')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        return view('admin.artikeldosen.index')
            ->with('bahasa', $bahasa)
            ->with('tesises', $tesises)
            ->with('disertasis', $disertasis)
            ->with('artikeldosens', $artikeldosens);
    }
}
