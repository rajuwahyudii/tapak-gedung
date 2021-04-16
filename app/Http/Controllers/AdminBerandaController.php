<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBerandaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($bahasa)
    {
        if ($bahasa == 'english') {
            $sliders = DB::table('sliders')
                ->where('bahasa', 'english')
                ->orderBy('created_at', 'DESC')->get();
            $berandakonten = DB::table('berandakontens')
                ->where('bahasa', 'english')
                ->get()
                ->first();
        } else {
            $sliders = DB::table('sliders')->where('bahasa', 'indonesia')
                ->orderBy('created_at', 'DESC')
                ->get();
            $berandakonten = DB::table('berandakontens')
                ->where('bahasa', 'indonesia')
                ->get()
                ->first();
        }
        $sosial_medias = DB::table('sosialmedias')->get();
        $membershipakreditasis = DB::table('membershipakreditasis')->get();

        return view('admin.beranda.index')
            ->with('sosial_medias', $sosial_medias)
            ->with('sliders', $sliders)
            ->with('membershipakreditasis', $membershipakreditasis)
            ->with('berandakonten', $berandakonten);
    }
}
