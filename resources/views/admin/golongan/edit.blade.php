@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">EDIT GOLONGAN PEGAWAI</h1>
                        </div>

                        <div class="col col-lg-12">

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('golongan-dashboard.update', $golongans['id']) }}" method="POST"
                                class="mx-5 mt-4">
                                @method('PUT')
                                @csrf

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"><b>Golongan</b></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_golongan" name="nama_golongan"
                                            value="{{ $golongans['nama_golongan'] }}">
                                    </div>
                                </div>
                                @error('nama_golongan')
                                    {{ $message }}
                                @enderror

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"><b>Nama Golongan</b></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_golongan" name="jenis_golongan"
                                            value="{{ $golongans['jenis_golongan'] }}">
                                    </div>
                                </div>
                                @error('jenis_golongan')
                                    {{ $message }}
                                @enderror

                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"><b>Besar Gaji</b></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="besar_gaji" name="besar_gaji"
                                            value="{{ $golongans['besar_gaji'] }}">
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
                                                    class="bi bi-pencil-square"></i> Update</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
