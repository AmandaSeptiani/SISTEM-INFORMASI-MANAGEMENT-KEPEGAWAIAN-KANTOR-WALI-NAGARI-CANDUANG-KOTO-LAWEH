@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">EDIT GAJI PEGAWAI</h1>
                        </div>

                        <form action="{{ route('gaji-dashboard.update', $gajis['id_gaji']) }}" method="post"
                            class="mx-5 mt-4">
                            @method('PUT')
                            @csrf

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                                <div class="col-sm-10">
                                    <select name="pegawai_id" class="form-control">
                                        @foreach ($pegawais as $data)
                                            <option value="{{ $data->id_pegawai }}"
                                                {{ $data->id_pegawai == $gajis['pegawai_id'] ? 'selected' : '' }}>
                                                {{ $data->nama_pegawai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('nama_pegawai')
                                {{ $message }}
                            @enderror


                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tanggal</b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                                        value="{{ $gajis['tanggal'] }}">
                                </div>
                            </div>
                            @error('tanggal')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Gaji Pokok</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok"
                                        value="{{ $gajis['gaji_pokok'] }}">
                                </div>
                            </div>
                            @error('gaji_pokok')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Tunjangan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tunjangan" name="tunjangan"
                                        value="{{ $gajis['tunjangan'] }}">
                                </div>
                            </div>
                            @error('tunjangan')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Uang Kesejahteraan</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="thr" name="thr"
                                        value="{{ $gajis['thr'] }}">
                                </div>
                            </div>
                            @error('thr')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Premi BPJS</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="premi_bpjs" name="premi_bpjs"
                                        value="{{ $gajis['premi_bpjs'] }}">
                                </div>
                            </div>
                            @error('premi_bpjs')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Premi BPJSTK</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="premi_bpjstk" name="premi_bpjstk"
                                        value="{{ $gajis['premi_bpjstk'] }}">
                                </div>
                            </div>
                            @error('premi_bpjstk')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Total Diterima</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="total" name="total"
                                        value="{{ $gajis['total'] }}">
                                </div>
                            </div>
                            @error('total')
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
    </section>
@endsection
