<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\golongan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.index',[
            'pegawais' => Pegawai::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
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
            'nip' => 'required|size:10',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'golongan' => 'required',
            'alamat' => 'required',
        ]);
        Pegawai::create($validatedData);
        return redirect('/pegawai')->with('pesan','Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai, $id)
    {   
        return view('pegawai.show',[
            'golongans' => Golongan::all(),
            'pegawais' => Pegawai::where('nip', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pegawai.data-pegawai.edit',[
            'golongans' => Golongan::all(),
            'pegawais' => Pegawai::where('nip_pegawai', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validatedData = $request->validate([
            'nip_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'golongan_id' => 'required',
            'status_pegawai' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'foto' => 'required',
            'jabatan' => 'required',
            'npwp' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'status_nikah' => 'required',
            'agama' => 'required',
            'nik' => 'required',

        ]);
        
        $validatedData['users_id'] = Auth()->user()->id;

        if($request->oldPicture){
            Storage::delete('foto');        
        }

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto');
        }
        Pegawai::where('nip_pegawai', $id) ->update($validatedData);
        return redirect('/dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
