<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class WalinagariCutiController extends Controller
{
    public function index()
    {
        return view('walinagari.cuti.index',[
            'cutis' => Cuti::join('pegawais','cutis.pegawai_id','pegawais.id_pegawai')
            ->orderBy('id_cuti', 'desc')
            ->get(),
        ]);
    }
}
