<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Gaji;
use App\Models\Cuti;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\Presensi;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printgaji()
    {
        $gajis = Gaji::join('pegawais','gajis.pegawai_id','pegawais.id_pegawai')
        ->where('users_id', Auth()->user()->id)->first();

        $pdf = PDF::loadView('pegawai.gaji.print', ['gajis' => $gajis]);

        // return $pdf->download('gaji.pdf');
        return $pdf->stream('Slip Gaji.pdf');
    }
    
    public function printpegawai()
    {
        $pegawai = Pegawai::get();
    
        $data = [
            'pegawai' => $pegawai,
        ];
    
        $pdf = PDF::loadView('admin.pegawai.print', $data);
        return $pdf->stream('Data Pegawai.pdf');
    }

    public function printdetail()
    {
        $data = [
            'pegawais' => Pegawai::get(),
        ];

        $pdf = new Dompdf();
        $pdf = PDF::loadView('admin.dashboard.print', $data);
        
        return $pdf->stream('Detail Pegawai.pdf');
    }

    public function printgajiadmin(Request $request)
    {
        $bulan = $request->input('bulan', date('m')); // Menggunakan nilai default bulan saat ini jika tidak ada input bulan
        $gaji = Gaji::join('pegawais', 'gajis.pegawai_id', 'pegawais.id_pegawai')
            ->whereMonth('gajis.tanggal', '=', $bulan)
            ->orderBy('gajis.id_gaji', 'desc')
            ->get();
    
        $data = [
            'gaji' => $gaji,
            'bulan' => $bulan,
        ];
    
        $pdf = PDF::loadView('admin.laporangaji.print', $data);
        return $pdf->stream('Data Gaji.pdf');
    }
    


    public function printcutiadmin(Request $request)
    {
        $bulan = $request->input('bulan', date('m'));
        $cuti = Cuti::join('pegawais', 'cutis.pegawai_id', 'pegawais.id_pegawai')
        ->whereMonth('cutis.tanggal_mulai', '=', $bulan)
        ->orderBy('cutis.id_cuti', 'desc')
        ->get();

        $data = [
            'cuti' => $cuti,
            'bulan' => $bulan,
        ];

        $pdf = PDF::loadView('admin.laporancuti.print', $data);
        return $pdf->stream('Data Cuti.pdf');
    }

    public function printpresensiadmin(Request $request)
    {
        $bulan = $request->input('bulan', date('m'));
        $presensi = Presensi::join('pegawais', 'presensis.pegawai_id', 'pegawais.id_pegawai')
        ->whereMonth('presensis.tanggal', '=', $bulan)
        ->orderBy('presensis.id', 'desc')
        ->get();

        $pegawaiList = Pegawai::all(); // Ambil daftar pegawai

        $data = [
            'presensi' => $presensi,
            'pegawaiList' => $pegawaiList, // Kirim daftar pegawai ke view
            'bulan' => $bulan,
        ];

        $pdf = PDF::loadView('admin.laporanpresensi.print', $data);
        return $pdf->stream('Data Presensi.pdf');
    }



    
   
}
