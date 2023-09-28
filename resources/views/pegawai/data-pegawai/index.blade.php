@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">CREATE DATA PEGAWAI</h1>
                        </div>

                        <form action="{{ route('pegawai-dashboard.store') }}" method="POST" enctype="multipart/form-data"
                            class="mx-5 mt-4">
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>NIP Pegawai</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="nip_pegawai"
                                        class="form-control @error('nip_pegawai') is-invalid @enderror"
                                        value="{{ Auth()->user()->nip }}" readonly>
                                    @error('nip_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_pegawai"
                                        class="form-control @error('nama_pegawai') is-invalid @enderror" value="">
                                    @error('nama_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>No NIK</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="nik"
                                        class="form-control @error('nik') is-invalid @enderror" value="{{ @old('nik') }}">
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Jabatan Pegawai</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="jabatan"
                                        class="form-control @error('jabatan') is-invalid @enderror"
                                        value="{{ @old('jabatan') }}">
                                    @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Jenis Kelamin</b></label>
                                <div class="col-sm-10">
                                    <select class="form-select  @error('jenis_kelamin') is-invalid @enderror"
                                        name="jenis_kelamin">
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin') === 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin') === 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tempat Lahir</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="tempat_lahir"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{ @old('tempat_lahir') }}">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tanggal Lahir</b></label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lahir"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{ @old('tanggal_lahir') }}">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Golongan Pegawai</b></label>
                                <div class="col-sm-10">
                                    <select name="golongan_id" class="form-select">
                                        <option selected>Pilih Golongan</option>
                                        @foreach ($golongans as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_golongan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Status Pegawai</b></label>
                                <div class="col-sm-10">
                                    <select class="form-select @error('status_pegawai') is-invalid @enderror"
                                        name="status_pegawai">
                                        <option value="">Pilih status pegawai</option>
                                        <option value="Aktif" {{ old('status_pegawai') === 'Aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="Belum Aktif"
                                            {{ old('status_pegawai') === 'Belum Aktif' ? 'selected' : '' }}>
                                            Belum Aktif</option>
                                    </select>
                                    @error('status_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Email</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ Auth()->user()->email }}" readonly>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Telp</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="telp"
                                        class="form-control @error('telp') is-invalid @enderror"
                                        value="{{ Auth()->user()->telp }}" readonly>
                                    @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Agama</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="agama"
                                        class="form-control @error('agama') is-invalid @enderror"
                                        value="{{ @old('agama') }}">
                                    @error('agama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Pendidikan Terakhir</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="pendidikan_terakhir"
                                        class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                                        value="{{ @old('pendidikan_terakhir') }}">
                                    @error('pendidikan_terakhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>NPWP</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="npwp"
                                        class="form-control @error('npwp') is-invalid @enderror"
                                        value="{{ @old('npwp') }}">
                                    @error('npwp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ @old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Status Nikah</b></label>
                                <div class="col-sm-10">
                                    <select class="form-select @error('status_nikah') is-invalid @enderror"
                                        name="status_nikah">
                                        <option value="">Pilih status nikah</option>
                                        <option value="Nikah" {{ old('status_nikah') === 'Nikah' ? 'selected' : '' }}>
                                            Nikah</option>
                                        <option value="Belum Nikah"
                                            {{ old('status_nikah') === 'Belum Nikah' ? 'selected' : '' }}>
                                            Belum Nikah</option>
                                    </select>
                                    @error('status_nikah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Foto</b></label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file @error('foto') is-invalid @enderror"
                                        name="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-success my-2 mb-3"
                                        style="background: #37517e; padding: 10px 20px; font-size: 15px;">
                                        <i class="bi bi-plus-square mx-2"></i> Create Data
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
