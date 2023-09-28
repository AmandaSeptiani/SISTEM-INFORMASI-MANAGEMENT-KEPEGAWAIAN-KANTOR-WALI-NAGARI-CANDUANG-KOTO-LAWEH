@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">CREATE GAJI PEGAWAI</h1>
                        </div>

                        <form action="/gaji-dashboard" method="post" class="mx-5 mt-4">
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                <div class="col-sm-10">
                                    <select name="pegawai_id" class="form-control">
                                        <option selected>Pilih Pegawai</option>
                                        @foreach ($pegawais as $data)
                                            <option value="{{ $data->id_pegawai }}">{{ $data->nama_pegawai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('nama_golongan')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tanggal</b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        value="{{ old('tanggal') }}">
                                </div>
                            </div>
                            @error('tanggal')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Gaji Pokok</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok"
                                        value="{{ old('gaji_pokok') }}">
                                </div>
                            </div>
                            @error('gaji_pokok')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tunjangan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tunjangan" name="tunjangan"
                                        value="{{ old('tunjangan') }}">
                                </div>
                            </div>
                            @error('tunjangan')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Uang Kesejahteraan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="thr" name="thr"
                                        value="{{ old('thr') }}">
                                </div>
                            </div>
                            @error('thr')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Premi BPJS</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="premi_bpjs" name="premi_bpjs"
                                        value="{{ old('premi_bpjs') }}">
                                </div>
                            </div>
                            @error('premi_bpjs')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Premi BPJSTK</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="premi_bpjstk" name="premi_bpjstk"
                                        value="{{ old('premi_bpjstk') }}">
                                </div>
                            </div>
                            @error('premi_bpjstk')
                                {{ $message }}
                            @enderror

                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-success"
                                            style="min-width: 160px; padding: 10px 20px;"><i
                                                class="bi bi-plus-square mx-2"></i>Create</button>
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
