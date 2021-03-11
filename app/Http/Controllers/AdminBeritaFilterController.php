<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminBeritaFilterController extends Controller
{
    public function bahasaFilter($bahasa)
    {
        $beritas = DB::table('beritas')
            ->where('beritas.bahasa', $bahasa)
            ->get();

        return view('admin.berita.index')->with('beritas', $beritas);
    }
}
