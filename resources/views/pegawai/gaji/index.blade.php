@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">DATA GAJI PEGAWAI</h1>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Gaji Pokok</th>
                                    <th scope="col">Tunjangan</th>
                                    <th scope="col">Uang Kesejahteraan</th>
                                    <th scope="col">Premi BPJS</th>
                                    <th scope="col">Premi BPJSTK</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                <tr>
                            </thead>
                            @foreach ($gajis as $gaji)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $gaji->nama_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $gaji->tanggal }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->tunjangan, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->thr, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->premi_bpjs, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->premi_bpjstk, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">Rp.
                                        {{ number_format($gaji->total, 0, ',', '.') }}</td>
                                    <td class="text-center align-middle">
                                        <a href="/printgaji" class="btn btn-primary">
                                            <i class="bi bi-printer-fill"></i>
                                        </a>
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
