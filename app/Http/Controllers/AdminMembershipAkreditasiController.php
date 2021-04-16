<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Membershipakreditasi;
use Illuminate\Http\Request;

class AdminMembershipAkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.membership_akreditasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $gambar = time() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('storage/membership_akreditasi/', $gambar);
        } else {
            $gambar = 'default.png';
        }

        $membershipakreditasi = new Membershipakreditasi();
        $membershipakreditasi->gambar = $gambar;
        $membershipakreditasi->url = $request->input('url');
        $membershipakreditasi->kategori = $request->input('kategori');
        $membershipakreditasi->save();

        return redirect()->route('admin.beranda.index', 'indonesia')->with('success', 'Membership / Accredited By berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.membership_akreditasi.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membershipakreditasi = DB::table('membershipakreditasis')->where('id', $id)->get()->first();
        return view('admin.membership_akreditasi.edit')->with('membershipakreditasi', $membershipakreditasi);
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
        if ($request->hasFile('gambar')) {
            $gambar = time() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('storage/membership_akreditasi/', $gambar);
        } else {
            $gambar = 'default.png';
        }

        $membershipakreditasi =  Membershipakreditasi::find($id);
        $membershipakreditasi->gambar = $gambar;
        $membershipakreditasi->url = $request->input('url');
        $membershipakreditasi->kategori = $request->input('kategori');
        $membershipakreditasi->save();

        return redirect()->route('admin.beranda.index', 'indonesia')->with('success', 'Membership / Accredited By berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membershipakreditasi =  Membershipakreditasi::find($id);
        $membershipakreditasi->delete();

        return redirect()->route('admin.beranda.index', 'indonesia')->with('success', 'Membership / Accredited By berhasil dihapus !');
    }
}
