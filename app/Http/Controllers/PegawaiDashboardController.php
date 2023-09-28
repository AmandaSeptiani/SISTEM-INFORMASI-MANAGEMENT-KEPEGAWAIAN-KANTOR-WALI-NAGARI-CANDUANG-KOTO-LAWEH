<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.data-pegawai.index', [
            'golongans' => Golongan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pegawai.create',[
            'golongans' => Golongan::all()
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
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto');
        }
        Pegawai::create($validatedData);

        User::where('id', Auth()->user()->id)->update([
            'status_pegawai' => 'Sukses'
        ]);

        return redirect('/dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai, $id)
    {
        // 
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
    public function update(Request $request, $id)
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
            Pegawai::where('nip_pegawai', $id) ->update($validatedData);
            return redirect('/dashboard')->with('pesan','Data berhasil diubah');
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
    public function destroy(Request $request, $id)
    {
        
        $pegawais = Pegawai::where('nip_pegawai', $id);
        $pegawais->delete();

        if($request->oldPicture){
            Storage::delete('foto');        
        }

        $deleted = User::where('nip', $id);
        $deleted->delete();

        return redirect('/dashboard')->with('pesan','Data berhasil dihapus');
    }
}
