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
            /* Set ukuran font menjadi 12px */
        }

        .table-responsive {
            overflow-x: auto;
            font-size: 12px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000000;
            font-size: 12px;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #000000;
            font-size: 12px;
        }

        .table th {
            background-color: #f2f2f2;
            font-size: 12px;
        }

        .kopsurat {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            margin-bottom: 1s0px;

        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;

        }

        .ttd {
            text-align: right;
            margin-top: 20px;
            padding-right: 20px;
            font-size: 10px;
            /* Ukuran font ttd */
        }

        .ttd1 {
            text-align: right;
            margin-top: 50px;
            padding-right: 20px;
            font-size: 10px;
            /* Ukuran font ttd */
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
                font-size: 7px;
            }

            .ttd {
                text-align: right;
                margin-top: 20px;
                padding-right: 20px;
                font-size: 10px;
                /* Ukuran font ttd saat mencetak */
            }

            .ttd1 {
                text-align: right;
                margin-top: 50px;
                padding-right: 20px;
                font-size: 10px;
                /* Ukuran font ttd */
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
                    <td style=" text-align: center" width="25%"><img src="asset/img/agam1.png" alt="Logo"
                            width="10%"></td>
                    <td style=" text-align: center">
                        <h1>PEMERINTAH KABUPATEN AGAM</h1>
                        <h1>KANTOR WALI NAGARI CANDUANG KOTO LAWEH</h1>
                        <p class="address">Jl. Raya Balai Sati No.1 | Telpon / Fax. (0752) 426739 | Kode Pos 26192</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="header">
        <h1>Laporan Gaji Pegawai</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center align-middle">No</th>
                    <th class="text-center align-middle">Nama Pegawai</th>
                    <th class="text-center align-middle">Tanggal</th>
                    <th class="text-center align-middle">Gaji Pokok</th>
                    <th class="text-center align-middle">Tunjangan</th>
                    <th class="text-center align-middle">Uang Kesejahteraan</th>
                    <th class="text-center align-middle">Premi BPJS</th>
                    <th class="text-center align-middle">Premi BPJSTK</th>
                    <th class="text-center align-middle">Total</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @foreach ($gaji as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['nama_pegawai'] }}</td>
                        <td>{{ $item['tanggal'] }}</td>
                        <td>Rp. {{ $item['gaji_pokok'] }},-</td>
                        <td>Rp. {{ $item['tunjangan'] }},-</td>
                        <td>Rp. {{ $item['thr'] }},-</td>
                        <td>Rp. {{ $item['premi_bpjs'] }},-</td>
                        <td>Rp. {{ $item['premi_bpjstk'] }},-</td>
                        <td>Rp. {{ $item['total'] }},-</td>
                    </tr>
                @endforeach
            </tbody>

            </tbody>
        </table>
    </div>


    <div class="footer">
        <p>Terima kasih atas kerja keras Anda.</p>
    </div>

    <div class="ttd">
        <p>Wali Nagari Canduang Koto Laweh</p>
        <!-- Tempatkan tanda tangan atau elemen lainnya di sini -->
    </div>

    <div class="ttd1">
        <p>H.SYAHENDRA,S.T, SUTAN LEMBAK ALAM</p>
        <!-- Tempatkan tanda tangan atau elemen lainnya di sini -->
    </div>

</body>

</html>
