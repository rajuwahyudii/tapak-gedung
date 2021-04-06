<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminBeritaFilterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bahasaFilter($bahasa)
    {
        $beritas = DB::table('beritas')
            ->where('beritas.bahasa', $bahasa)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);

        return view('admin.berita.index')->with('beritas', $beritas);
    }
}
