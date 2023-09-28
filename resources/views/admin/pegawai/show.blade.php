@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card py-4 px-4">
                    <div class="row">

                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-2 text-center">BIODATA PEGAWAI</h1>
                        </div>

                        <div class="col-md-8">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Pegawai</h3>
                                    <div class="card-tools"></div>
                                </div>
                                <div class="card-body mt-2">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><b>NIP Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->nip_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Nama Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->nama_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NIK</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->nik }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Jabatan</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tempat Lahir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->tempat_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tanggal Lahir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Jenis Kelamin</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Agama</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->agama }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Golongan</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->golongan->nama_golongan }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NPWP</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->npwp }}</td>
                                            </tr>
                                            <tr>
                                                <td><b> Pegawai</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->status_pegawai }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Status Nikah</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->status_nikah }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->email }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Telp</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->telp }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Alamat</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Pendidikan Terakhir</b></td>
                                                <td>:</td>
                                                <td>{{ $pegawais->pendidikan_terakhir }}</td>
                                            </tr>
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
                                        <img src="{{ asset('storage/' . $pegawais->foto) }}" alt="foto" width="300px;"
                                            height="300" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
