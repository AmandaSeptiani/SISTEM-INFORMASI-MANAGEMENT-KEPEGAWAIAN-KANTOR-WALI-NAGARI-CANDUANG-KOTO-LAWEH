<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class UpdateCutiController extends Controller
{

    public function updatesetujui(Request $request)
    {
        Cuti::where('id_cuti', $request->id_cuti)->update([
            'status' => 'Disetujui'
        ]);
        return redirect('/cuti-dashboard')->with('pesan','Pengajuan cuti/ izin di setujui');
    }

    
    public function updatetidaksetujui(Request $request)
    {
        Cuti::where('id_cuti', $request->id_cuti)->update([
            'status' => 'Tidak Disetujui'
        ]);
        return redirect('/cuti-dashboard')->with('pesan','Pengajuan cuti/izin di tolak');
    }

    
}
