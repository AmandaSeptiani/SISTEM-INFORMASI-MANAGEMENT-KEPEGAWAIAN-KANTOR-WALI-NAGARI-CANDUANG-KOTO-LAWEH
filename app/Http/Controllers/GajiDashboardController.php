<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class GajiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gaji.index',[
            'gajis' => Gaji::join('pegawais', 'gajis.pegawai_id', 'pegawais.id_pegawai')
            ->orderBy('id_gaji', 'desc')
            ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gaji.create',[
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
            'tanggal' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'thr' => 'required',
            'premi_bpjs' => 'required',
            'premi_bpjstk' => 'required',
        ]);

        $totalSemuanya = $validatedData['gaji_pokok'] + $validatedData['tunjangan'] + $validatedData['thr'] - $validatedData['premi_bpjs'] - $validatedData['premi_bpjstk'];
        $validatedData['total'] = $totalSemuanya;

        Gaji::create($validatedData);
        return redirect('/gaji-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.gaji.edit',[
            'pegawais' => Pegawai::all(),
            'gajis' => Gaji::where('id_gaji', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'pegawai_id' => 'required',
            'tanggal' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'thr' => 'required',
            'premi_bpjs' => 'required',
            'premi_bpjstk' => 'required',
            'total' => 'required',
        ]);
        Gaji::where('id_gaji',$id)
        ->update($validatedData);
        return redirect('/gaji-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaji $gaji, $id)
    {
        $gaji = Gaji::where('id_gaji', $id);
        $gaji->delete();

        return redirect('/gaji-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
