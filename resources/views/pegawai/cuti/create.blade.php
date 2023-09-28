@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">PENGAJUAN CUTI/IZIN PEGAWAI</h1>
                        </div>

                        <form action="/cuti" method="post"enctype="multipart/form-data" class="mx-5 mt-4">
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>NIP</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="pegawais_id"
                                        value="{{ Auth::user()->pegawai->nip_pegawai }}">
                                    <input type="text" class="form-control" id="nama" name="pegawai_id"
                                        value="{{ Auth::user()->pegawai->id_pegawai }}" hidden>
                                </div>
                            </div>
                            @error('nama_pegawai')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama_pegawai"
                                        value="{{ Auth::user()->pegawai->nama_pegawai }}">
                                </div>
                            </div>
                            @error('nama_pegawai')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tanggal Mulai</b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                        value="{{ old('tanggal_mulai') }}">
                                </div>
                            </div>
                            @error('tanggal_mulai')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tanggal Selesai</b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir"
                                        value="{{ old('tanggal_berakhir') }}">
                                </div>
                            </div>
                            @error('tanggal_berakhir')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Keterangan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                                        value="{{ old('keterangan') }}">
                                </div>
                            </div>
                            @error('keterangan')
                                {{ $message }}
                            @enderror

                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-success"
                                            style="min-width: 160px; padding: 10px 20px;"><i
                                                class="bi bi-send mx-2"></i>Ajukan</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
