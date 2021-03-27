<?php

namespace App\Http\Controllers;

use App\Models\Berandakonten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBerandaKontenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berandakonten = DB::table('berandakontens')->where('id', $id)->get()->first();
        return view('admin.beranda.konten.edit')->with('berandakonten', $berandakonten);
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

        $berandakonten = Berandakonten::find($id);
        $berandakonten->bahasa = $request->input('bahasa');
        $berandakonten->judul = $request->input('judul');
        $berandakonten->konten = $request->input('konten');
        $berandakonten->url = $request->input('url');
        $berandakonten->save();

        return redirect()->route('admin.beranda.index', $request->input('bahasa'))->with('success', 'beranda konten berhasil diupdate ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
