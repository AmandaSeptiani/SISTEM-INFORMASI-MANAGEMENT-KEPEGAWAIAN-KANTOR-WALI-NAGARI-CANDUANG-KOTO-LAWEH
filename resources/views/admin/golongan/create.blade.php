@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">CREATE GOLONGAN PEGAWAI</h1>
                        </div>

                        <form action="/golongan-dashboard" method="post" class="mx-5 mt-4">
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Golongan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_golongan" name="nama_golongan"
                                        value="{{ old('nama_golongan') }}">
                                </div>
                            </div>
                            @error('nama_golongan')
                                {{ $message }}
                            @enderror


                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama Golongan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenis_golongan" name="jenis_golongan"
                                        value="{{ old('jenis_golongan') }}">
                                </div>
                            </div>
                            @error('jenis_golongan')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Besar Gaji</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="besar_gaji" name="besar_gaji"
                                        value="{{ old('besar_gaji') }}">
                                </div>
                            </div>
                            @error('besar_gaji')
                                {{ $message }}
                            @enderror

                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-success"
                                            style="min-width: 160px; padding: 10px 20px;"><i
                                                class="bi bi-plus-square mx-2"></i> Create</button>
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
