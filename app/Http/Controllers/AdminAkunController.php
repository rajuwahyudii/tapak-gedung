<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminAkunController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('superadmin')->only([
            'index', 'create', 'store', 'show', 'destroy'  // Could add bunch of more methods too
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akuns = DB::table('users')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('admin.akun.index')->with('akuns', $akuns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.akun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('admin.akun.index')->with('success', 'Admin berhasil dibuat !');
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
        $akun = DB::table('users')
            ->where('users.id', $id)
            ->get()
            ->first();

        return view('admin.akun.edit')->with('akun', $akun);
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
        // return $request->input('role');
        // return $request;
        if (empty($request->input('role'))) {
            $role = 'admin';
        } else {
            $role = $request->input('role');
        }
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->role = $role;
        $user->password =  Hash::make($request->input('password'));
        $user->save();
        if (auth()->user()->role == 'super admin') {
            return redirect()->route('admin.akun.index')->with('success', 'Admin berhasil di edit !');
        } else {
            return redirect()->route('admin.menu.index')->with('success', 'akun berhasil di update !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.akun.index')->with('success', 'Admin berhasil dihapus !!');
    }
}
