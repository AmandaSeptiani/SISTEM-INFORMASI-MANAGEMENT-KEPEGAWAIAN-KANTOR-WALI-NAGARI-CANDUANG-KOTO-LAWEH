<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pegawai.index', [
            'pegawais' => Pegawai::with('golongan')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('admin.pegawai.show',[
            'golongans' => Golongan::all(),
            'pegawais' => Pegawai::where('nip_pegawai', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pegawai.edit',[
            'golongans' => Golongan::all(),
            'pegawais' => Pegawai::where('nip_pegawai', $id)->first(),
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawais = Pegawai::where('nip_pegawai', $id);
        $pegawais->delete();
        $users = User::where('nip', $id)->update([
            'status_pegawai' => null
        ]);
      
        return redirect('/admin-pegawai')->with('pesan','Data berhasil dihapus');
    }
}
