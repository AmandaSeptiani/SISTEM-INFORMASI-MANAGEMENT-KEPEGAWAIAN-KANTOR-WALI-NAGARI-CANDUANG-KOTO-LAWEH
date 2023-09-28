@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">LAPORAN CUTI/IZIN PEGAWAI</h1>
                        </div>

                        <div class="row justify-content-center align-items-center mb-3">
                            <div class="col-lg-8">
                                <form action="/printcutiadmin" method="post" class="mb-3">
                                    @csrf
                                    @isset($bulan)
                                        <input type="hidden" name="bulan" value="{{ $bulan }}">
                                    @endisset
                                    <button type="submit" class="btn btn-success"
                                        style="padding: 10px 20px; font-size: 15px;">
                                        <i class="bi bi-printer-fill"></i> Print Cuti/Izin Pegawai
                                    </button>
                                </form>
                            </div>

                            <div class="col-lg-4">
                                <form action="{{ route('filter-cuti') }}" method="post" class="form-inline">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="bulan" class="col-lg-3 col-form-label text-right">Pilih
                                            Bulan:</label>
                                        <div class="col-lg-6"> <!-- Changed the column width -->
                                            <select class="form-control" id="bulan" name="bulan">
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3"> <!-- Changed the column width -->
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                <tr>
                            </thead>
                            @foreach ($cutis as $cuti)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cuti->nip_pegawai }}</td>
                                    <td>{{ $cuti->nama_pegawai }}</td>
                                    <td>{{ $cuti->tanggal_mulai }}</td>
                                    <td>{{ $cuti->tanggal_berakhir }}</td>
                                    <td>{{ $cuti->keterangan }}</td>
                                    <td class="text-center align-middle">
                                        @if ($cuti->status == 'Menunggu Persetujuan')
                                            <span class="badge bg-warning">{{ $cuti->status }}</span>
                                        @endif

                                        @if ($cuti->status == 'Disetujui')
                                            <span class="badge bg-success">{{ $cuti->status }}</span>
                                        @endif

                                        @if ($cuti->status == 'Tidak Disetujui')
                                            <span class="badge bg-danger">{{ $cuti->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
