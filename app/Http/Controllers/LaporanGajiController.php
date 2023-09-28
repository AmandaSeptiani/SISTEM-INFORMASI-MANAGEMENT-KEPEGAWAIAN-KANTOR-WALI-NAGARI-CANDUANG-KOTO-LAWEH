<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Cuti;
use App\Models\Gaji;
use App\Models\Presensi;
use Illuminate\Http\Request;

class LaporanGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.laporangaji.index',[
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
    public function filter(Request $request)
    {
        $bulan = $request->input('bulan');
        $gajis = Gaji::join('pegawais', 'gajis.pegawai_id', 'pegawais.id_pegawai')
            ->whereMonth('gajis.tanggal', '=', $bulan)
            ->orderBy('gajis.id_gaji', 'desc')
            ->get();
    
        return view('admin.laporangaji.index', ['gajis' => $gajis, 'bulan' => $bulan]);
    }
    

    /**
     * Store a n
     * ewly created resource in storage.
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
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
