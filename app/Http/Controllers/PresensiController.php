<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.presensi.index',[
            'presensis' => Presensi::join('pegawais','presensis.pegawai_id','pegawais.id_pegawai')
            ->where('users_id', Auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(7),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.presensi.create',[
            'presensis' => Presensi::all(),
            'pegawais' => Pegawai::where('users_id', Auth()->user()->id)->first()
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
            'jam_masuk' => 'required', 
            'foto_masuk' => 'required|image', 
        ]);

        // Tambahkan validasi untuk pembatasan jam di sini
        $allowedStartTime = '07:00'; // Jam mulai yang diizinkan
        $allowedEndTime = '08:00';   // Jam berakhir yang diizinkan

        $jamMasuk = $validatedData['jam_masuk'];
        if ($jamMasuk < $allowedStartTime || $jamMasuk > $allowedEndTime) {
            return redirect()->back()->withErrors(['jam_masuk' => 'Jam masuk diluar batas yang diizinkan']);
        }

        if ($request->hasFile('foto_masuk')) {
            $validatedData['foto_masuk'] = $request->file('foto_masuk')->store('foto_masuk');
        }

        Presensi::create([
            'pegawai_id' => $validatedData['pegawai_id'],
            'tanggal' => $validatedData['tanggal'],
            'jam_masuk' => $validatedData['jam_masuk'],
            'foto_masuk' => $validatedData['foto_masuk'],
            'status' => 'Hadir'
        ]);

        return redirect('/presensi')->with('pesan', 'Presensi Masuk Berhasil');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pegawai.presensi.edit',[
            'presensis' => Presensi::where('id', $id)->first(),
            'pegawais' => Pegawai::where('users_id', Auth()->user()->id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jam_keluar' => 'required',
            'foto_keluar' => 'required',
        ]);

        if ($request->file('foto_keluar')) {
            $validatedData['foto_keluar'] = $request->file('foto_keluar')->store('foto_keluar');
        }

        Presensi::where('id', $id)->update([
            'jam_keluar' => $validatedData['jam_keluar'],
            'foto_keluar' => $validatedData['foto_keluar'],
            'status' => 'Hadir'
        ]);
        return redirect('/presensi')->with('pesan','Presensi Keluar Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presensi $presensi)
    {
        //
    }
}
