<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class LaporanCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.laporancuti.index',[
            'cutis' => Cuti::join('pegawais', 'cutis.pegawai_id', 'pegawais.id_pegawai')
            ->orderBy('id_cuti', 'desc')
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
        $cutis = Cuti::join('pegawais', 'cutis.pegawai_id', 'pegawais.id_pegawai')
            ->whereMonth('cutis.tanggal_mulai', '=', $bulan)
            ->orderBy('cutis.id_cuti', 'desc')
            ->get();

        return view('admin.laporancuti.index', ['cutis' => $cutis, 'bulan' => $bulan]);
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
