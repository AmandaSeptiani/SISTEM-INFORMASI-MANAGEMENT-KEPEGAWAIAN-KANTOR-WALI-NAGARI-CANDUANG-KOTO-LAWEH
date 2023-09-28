<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            font-size: 8px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000000;
        }

        .table th,
        .table td {
            padding: 5px;
            border: 1px solid #000000;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .kopsurat {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            margin-bottom: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .ttd,
        .ttd1 {
            text-align: right;
            margin-top: 50px;
            padding-right: 20px;
            font-size: 10px;
        }

        /* Penyesuaian untuk mencetak */
        @media print {
            body {
                padding: 0;
                font-size: 5px;
            }

            .kopsurat {
                display: none;
            }

            .table th,
            .table td {
                border: none;
                font-size: 7px;
            }

            .table {
                border: none;
            }

            .ttd,
            .ttd1 {
                text-align: right;
                margin-top: 50px;
                padding-right: 20px;
                font-size: 10px;
            }
        }

        @page {
            size: landscape;
        }
    </style>
</head>

<body class="A4">
    <div class="row">
        <div class="kopsurat">
            <table>
                <tr>
                    <td style="text-align: center; vertical-align: middle; padding-right: 10px;" width="25%">
                        <img src="asset/img/agam1.png" alt="Logo" width="10%">
                    </td>
                    <td style="text-align: center;">
                        <h1>PEMERINTAH KABUPATEN AGAM</h1>
                        <h1>KANTOR WALI NAGARI CANDUANG KOTO LAWEH</h1>
                        <p class="address">Jl. Raya Balai Sati No.1 | Telpon / Fax. (0752) 426739 | Kode Pos 26192</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="header">
        <h1>Laporan Presensi Pegawai</h1>
    </div>

    <div class="table-responsive">
        <table class="table datatable">
            <thead>
                <tr>
                    <th class="text-center align-middle">No</th>
                    <th class="text-center align-middle">Nama</th>
                    <!-- Loop through dates -->
                    @for ($date = 1; $date <= 30; $date++)
                        <th class="text-center align-middle">{{ str_pad($date, 2, '0', STR_PAD_LEFT) }}</th>
                    @endfor
                    <!-- End loop -->
                </tr>
            </thead>
            @foreach ($pegawaiList as $pegawai)
                <tr>
                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                    <td class="text-center align-middle">{{ $pegawai->nama_pegawai }}</td>
                    <!-- Loop through dates -->
                    @for ($day = 1; $day <= 30; $day++)
                        <td class="text-center align-middle">
                            @php
                                $presensiOnDate = $presensi->first(function ($item) use ($pegawai, $day) {
                                    return $item->pegawai_id == $pegawai->id_pegawai && Carbon\Carbon::parse($item->tanggal)->day == $day;
                                });
                            @endphp
                            @if ($presensiOnDate)
                                {{ $presensiOnDate->status }}
                            @endif
                        </td>
                    @endfor
                    <!-- End loop -->
                </tr>
            @endforeach
        </table>
    </div>

    <div class="footer">
        <p>Terima kasih atas kerja keras Anda.</p>
    </div>

    <div class="ttd">
        <p>Wali Nagari Canduang Koto Laweh</p>
    </div>

    <div class="ttd1">
        <p>H.SYAHENDRA,S.T, SUTAN LEMBAK ALAM</p>
        <!-- Tempatkan tanda tangan atau elemen lainnya di sini -->
    </div>

</body>

</html>
