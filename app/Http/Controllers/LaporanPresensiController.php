<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Pegawai;
use Illuminate\Support\Carbon;


class LaporanPresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggalAwal = Carbon::now()->startOfMonth();
        $tanggalAkhir = $tanggalAwal->copy()->endOfMonth();

        $presensis = Presensi::join('pegawais', 'presensis.pegawai_id', 'pegawais.id_pegawai')
            ->whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir]) // Filter berdasarkan rentang tanggal
            ->orderBy('id', 'desc')
            ->get();

        $pegawaiList = Pegawai::all();

        return view('admin.laporanpresensi.index', [
            'presensis' => $presensis,
            'pegawaiList' => $pegawaiList,
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
        ]);
    }

    public function filter(Request $request)
    {
        $bulan = $request->input('bulan');
        $presensis = Presensi::join('pegawais', 'presensis.pegawai_id', 'pegawais.id_pegawai')
            ->whereMonth('presensis.tanggal', '=', $bulan)
            ->orderBy('presensis.id', 'desc')
            ->get();

        return view('admin.laporanpresensi.index', ['presensis' => $presensis, 'bulan' => $bulan]);
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
        //
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
        //
    }
}
