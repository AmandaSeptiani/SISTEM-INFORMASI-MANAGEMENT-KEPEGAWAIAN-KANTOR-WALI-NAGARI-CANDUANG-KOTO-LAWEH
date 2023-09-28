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

                        <a href="{{ route('cuti.create') }}" class="btn btn-success my-2 mb-3"
                            style="padding: 10px 20px; font-size: 15px;">
                            <i class="bi bi-plus-square mx-2"></i> Create Pengajuan
                        </a>


                        @if (session()->has('pesan'))
                            <div class="alert alert-success" role="alert">
                                {{ session('pesan') }}
                            </div>
                        @endif

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">NIP</th>
                                    <th class="text-center align-middle">Nama</th>
                                    <th class="text-center align-middle">Tanggal Mulai</th>
                                    <th class="text-center align-middle">Tanggal Berakhir</th>
                                    <th class="text-center align-middle">Keterangan</th>
                                    <th class="text-center align-middle">Status</th>
                                <tr>
                            </thead>
                            @foreach ($cutis as $cuti)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $cuti->nip_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $cuti->nama_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $cuti->tanggal_mulai }}</td>
                                    <td class="text-center align-middle">{{ $cuti->tanggal_berakhir }}</td>
                                    <td class="text-center align-middle">{{ $cuti->keterangan }}</td>
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
