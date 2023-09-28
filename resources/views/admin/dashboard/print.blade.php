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
            padding: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: 0 auto 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 6px;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            font-size: 12px;
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>DETAIL PEGAWAI</h1>
    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card px-4">

                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pegawai</h3>
                                <div class="card-tools"></div>
                            </div>
                            <div class="card-body mt-2">
                                <table class="table">
                                    <tbody>
                                        @foreach ($pegawais as $pegawai)
                                            <tr>
                                                <td><b>NIP Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->nip_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Nama Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->nama_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NIK</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Jabatan</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tempat Lahir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->tempat_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanggal Lahir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Jenis Kelamin</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Agama</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->agama }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Golongan</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->golongan->nama_golongan }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NPWP</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->npwp }}</td>
                                            </tr>
                                            <tr>
                                                <td><b> Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->status_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Status Nikah</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->status_nikah }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->email }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Telp</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->telp }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Alamat</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Pendidikan Terakhir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawai->pendidikan_terakhir }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Foto Pegawai</h3>
                                <div class="card-tools"></div>
                            </div>
                            <div class="card-body mt-3">
                                <div class="text-center">
                                    @foreach ($pegawais as $pegawai)
                                        <img src={{ $pegawai->foto }} alt="foto" width="300px;" height="300"
                                            class="img-fluid">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <p>Terima kasih atas kerja keras Anda.</p>
    </div>

</body>

</html>
