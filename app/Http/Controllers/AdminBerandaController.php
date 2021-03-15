<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBerandaController extends Controller
{
    public function index($bahasa)
    {
        if ($bahasa == 'english') {
            $sliders = DB::table('sliders')->where('bahasa', 'english')->get();
        } else {
            $sliders = DB::table('sliders')->where('bahasa', 'indonesia')->get();
        }

        return view('admin.beranda.index')->with('sliders', $sliders);
    }
}
