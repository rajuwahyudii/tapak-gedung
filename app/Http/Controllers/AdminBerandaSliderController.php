<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;


class AdminBerandaSliderController extends Controller
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
        return view('admin.beranda.slider.create');
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
            $gambarName = time() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('storage/slider/'), $gambarName);
        } else {
            $gambarName = 'default.png';
        }

        $slider = new Slider();
        $slider->gambar = $gambarName;
        $slider->bahasa = $request->input('bahasa');
        $slider->title = $request->input('title');
        $slider->caption = $request->input('caption');
        $slider->save();

        return redirect()->route('admin.beranda.index', $request->input('bahasa'))->with('success', 'slider berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        return view('admin.beranda.slider.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.beranda.slider.edit')->with('slider', $slider);
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
            $gambarName = time() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('storage/slider/'), $gambarName);
        } else {
            $gambarName = 'default.png';
        }

        $slider = Slider::find($id);
        $slider->gambar = $gambarName;
        $slider->bahasa = $request->input('bahasa');
        $slider->title = $request->input('title');
        $slider->caption = $request->input('caption');
        $slider->save();

        return redirect()->route('admin.beranda.index', $request->input('bahasa'))->with('success', 'slider berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahasa = DB::table('sliders')->where('id', $id)->get()->first()->bahasa;

        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->route('admin.beranda.index', $bahasa)->with('success', 'slider berhasil dihapus !!');
    }
}
