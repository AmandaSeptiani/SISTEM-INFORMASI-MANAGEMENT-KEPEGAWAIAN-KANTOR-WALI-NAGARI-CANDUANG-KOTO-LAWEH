<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\Cuti;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index', [
            'pegawais' => Pegawai::with('user')->with('golongan')->where('users_id', Auth()->user()->id)->first(),
            'users' => User::where('level', 'Pegawai', 'WaliNagari')->get(),
            'golongans' => Golongan::latest()->get(),
            'cutis' => Cuti::latest()->get(),
            'pegawaiss' => Pegawai::latest()->get()
        ]);
     }
}
