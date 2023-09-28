<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.cuti.index',[
            'cutis' => Cuti::join('pegawais','cutis.pegawai_id','pegawais.id_pegawai')
            ->where('users_id', Auth()->user()->id)
            ->orderBy('id_cuti', 'desc')
            ->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.cuti.create',[
            'pegawais' => Pegawai::all()
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pegawai_id' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'keterangan' => 'required',
        ]);
        $validatedData['status']='Menunggu Persetujuan';
        Cuti::create($validatedData);
        return redirect('/cuti')->with('pesan','Data berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuti $cuti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuti $cuti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuti $cuti)
    {
        //
    }
}
