<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
            font-size: 12px;
            /* Set ukuran font menjadi 12px */
        }

        .table-responsive {
            overflow-x: auto;
        }

        .employee-info {
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .footer {
            text-align: right;
            margin-top: 20px;
        }

        .kopsurat {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }

        /* Penyesuaian untuk mencetak */
        @media print {
            body {
                padding: 0;
            }

            .kopsurat {
                display: none;
            }

            .table th,
            .table td {
                border: none;
            }

            .table {
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="kopsurat">
            <table>
                <tr>
                    <td style="text-align: center" width="25%"><img src="asset/img/agam1.png" alt="Logo"
                            width="50%"></td>
                    <td style="text-align: center">
                        <h1>PEMERINTAH KABUPATEN AGAM</h1>
                        <h1>KANTOR WALI NAGARI CANDUANG</h1>
                        <p class="address">Jl. Raya Balai Sati No.1 | Telpon / Fax. (0752) 426739 | Kode Pos 26192</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="header">
        <h1>Slip Gaji Pegawai</h1>
    </div>

    <div class="employee-info">
        <p><b>Nama Pegawai: {{ $gajis->nama_pegawai }}</b></p>
        <p><b>NIP: {{ $gajis->nip_pegawai }}</b></p>
        <p><b>Jabatan: {{ $gajis->jabatan }}</b></p>
        <p><b>Tanggal Slip Gaji: {{ date('d F Y', strtotime($gajis->tanggal)) }}</b></p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gaji Pokok</td>
                <td>Rp. {{ $gajis->gaji_pokok }},-</td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td>Rp. {{ $gajis->tunjangan }},-</td>
            </tr>
            <tr>
                <td>Uang Kesejahteraan</td>
                <td>Rp. {{ $gajis->thr }},-</td>
            </tr>
            <tr>
                <td>Premi BPJS</td>
                <td>Rp. {{ $gajis->premi_bpjs }},-</td>
            </tr>
            <tr>
                <td>Premi BPJSTK</td>
                <td>Rp. {{ $gajis->premi_bpjstk }},-</td>
            </tr>
            <tr style="background-color: rgb(166, 199, 238)">
                <td><b>Total Diterima</b></td>
                <td><b>Rp. {{ $gajis->total }},-</b></td>
            </tr>

        </tbody>
    </table>



    <div class="footer">
        <p>Terima kasih atas kerja keras Anda.</p>
    </div>
</body>

</html>
