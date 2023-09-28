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

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
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
                    <td style=" text-align: center" width="25%"><img src="asset/img/agam1.png" alt="Logo"
                            width="50%"></td>
                    <td style=" text-align: center">
                        <h1>PEMERINTAH KABUPATEN AGAM</h1>
                        <h1>KANTOR WALI NAGARI CANDUANG</h1>
                        <p class="address">Jl. Raya Balai Sati No.1 | Telpon / Fax. (0752) 426739 | Kode Pos 26192</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center align-middle">No</th>
                    <th class="text-center align-middle">Nama</th>
                    <th class="text-center align-middle">Jenis Kelamin</th>
                    <th class="text-center align-middle">Jabatan</th>
                    <th class="text-center align-middle">Golongan</th>
                    <th class="text-center align-middle">Telp</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                @foreach ($pegawai as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['nama_pegawai'] }}</td>
                        <td>{{ $item['jenis_kelamin'] }}</td>
                        <td>{{ $item['jabatan'] }}</td>
                        <td>{{ $item->golongan->nama_golongan }}</td>
                        <td>{{ $item['telp'] }}</td>
                    </tr>
                @endforeach
            </tbody>

            </tbody>
        </table>
    </div>


    <div class="footer">
        <p>Terima kasih atas kerja keras Anda.</p>
    </div>


</body>

</html>
