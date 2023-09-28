@extends('admin.layout.main')
@section('container')
    <br>


    <!-- ======= Hero Section ======= -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">

                @if (Auth()->user()->level == 'Admin')
                    <div class="row">
                        <div class="col-xxl-12 col-lg-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body mt-5 mx-4">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="row">
                                            <div class="col-lg-7 d-flex flex-column justify-content-center">
                                                <h6 class="card-title text-center">Selamat Datang di Halaman Dashboard Admin
                                                </h6>
                                                <h5 class="card-title text-center">Sistem Informasi Management
                                                    Kepegawaian(SIMPEG) Kantor Wali Nagari Canduang Koto Laweh</h5>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                <img src="{{ asset('images/icon2.png') }}" alt="pegawai" class="img-fluid"
                                                    width="50%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- User Registrasi -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">User Registrasi <span>| Tersedia</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ @count($users) }}</h6> <span
                                                class="text-muted small pt-2 ps-1">User</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- User Registrasi -->

                        <!-- Total Data Pegawai-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Pegawai <span>| Tersedia</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-video2"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ @count($pegawaiss) }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Pegawai</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- Total Data Pegawai -->

                        <!-- Total Pelanggan -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Golongan <span>| Tersedia</span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-clipboard-data"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ @count($golongans) }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Golongan</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- Total Pelanggan -->
                    </div>
                @endif

                @if (Auth()->user()->level == 'Pegawai')
                    @if (Auth()->user()->status_pegawai == 'Sukses')
                        <div class="row">
                            <div class="col-lg">
                                <div class="card px-5">
                                    <div class="pb-2 mb-3 border-bottom text-center">
                                        <h1 class="mt-4 text-center">BIODATA PEGAWAI</h1>
                                    </div>

                                    <a href="{{ route('pegawai.edit', $pegawais->nip_pegawai) }}"
                                        class="btn btn-success my-2 mb-3" style="padding: 10px 20px; font-size: 15px;">
                                        <i class="bi bi-pencil-square"></i> Edit Data Pegawai
                                    </a>

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
                                                        <img src="{{ asset('storage/' . $pegawais->foto) }}" alt="foto"
                                                            width="300px;" height="300" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card info-card revenue-card">
                                    <div class="card-body mt-5 mx-5">
                                        <div class="d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-lg-7 d-flex flex-column justify-content-center">
                                                    <h6 class="card-title">Selamat Datang di Halaman Dashboard
                                                        Pegawai</h6>
                                                    <h5 class="card-title">Sistem Informasi Management
                                                        Kepegawaian(SIMPEG)
                                                        Kantor Wali Nagari Canduang Koto Laweh</h5>
                                                    <h6>Isi Biodata Disini</h6>
                                                    <a href="{{ route('pegawai-dashboard.index') }}"
                                                        class="btn btn-success my-2 mb-3"
                                                        style="background: #37517e; padding: 10px 20px; font-size: 15px;">
                                                        <i class="bi bi-plus-square mx-2"></i> Daftar
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('images/icon2.png') }}" alt="pegawai"
                                                        class="img-fluid" width="70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (Auth()->user()->level == 'WaliNagari')
                    @if (Auth()->user()->status_pegawai == 'Sukses')
                        <div class="row">
                            <div class="col-lg">
                                <div class="card px-5">
                                    <div class="pb-2 mb-3 border-bottom text-center">
                                        <h1 class="mt-4 text-center">BIODATA PEGAWAI</h1>
                                    </div>

                                    <a href="{{ route('pegawai.edit', $pegawais->nip_pegawai) }}"
                                        class="btn btn-success my-2 mb-3" style="padding: 10px 20px; font-size: 15px;">
                                        <i class="bi bi-pencil-square"></i> Edit Data Pegawai
                                    </a>

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
                                                        <img src="{{ asset('storage/' . $pegawais->foto) }}"
                                                            alt="foto" width="300px;" height="300"
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card info-card revenue-card">
                                    <div class="card-body mt-5 mx-5">
                                        <div class="d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-lg-7 d-flex flex-column justify-content-center">
                                                    <h6 class="card-title">Selamat Datang di Halaman Dashboard
                                                        Wali Nagari</h6>
                                                    <h5 class="card-title">Sistem Informasi Management
                                                        Kepegawaian(SIMPEG)
                                                        Kantor Wali Nagari Canduang Koto Laweh</h5>
                                                    <h6>Isi Biodata Disini</h6>
                                                    <a href="{{ route('pegawai-dashboard.index') }}"
                                                        class="btn btn-success my-2 mb-3"
                                                        style="background: #37517e; padding: 10px 20px; font-size: 15px;">
                                                        <i class="bi bi-plus-square mx-2"></i> Daftar
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('images/icon2.png') }}" alt="pegawai"
                                                        class="img-fluid" width="70%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

            </div>
    </section>
@endsection
