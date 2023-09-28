<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.golongan.index',[
            'golongans' => Golongan::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.golongan.create');
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
            'jenis_golongan' => 'required',
            'nama_golongan' => 'required',
            'besar_gaji' => 'required',
        ]);
        Golongan::create($validatedData);
        return redirect('/golongan-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function show(Golongan $golongan, $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function edit(Golongan $golongan, $id)
    {
        return view('admin.golongan.edit',[
            'golongans' =>Golongan::find($id)
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Golongan $golongan, $id)
    {
        $validatedData = $request->validate([
            'jenis_golongan' => 'required',
            'nama_golongan' => 'required',
            'besar_gaji' => 'required',
        ]);

        Golongan::where('id',$id)
            ->update($validatedData);
        return redirect('/golongan-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Golongan $golongan, $id)
    {
        Golongan::destroy($id);
        return redirect('/golongan-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
