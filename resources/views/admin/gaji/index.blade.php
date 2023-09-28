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

                        <a href="{{ route('gaji-dashboard.create') }}" class="btn btn-success my-2 mb-3"
                            style="padding: 10px 20px; font-size: 15px;">
                            <i class="bi bi-plus-square mx-2"></i> Create Gaji Pegawai
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
                                </tr>
                            </thead>
                            @foreach ($gajis as $gaji)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gaji->nama_pegawai }}</td>
                                    <td>{{ $gaji->tanggal }}</td>
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
                                    <td>
                                        <a href="/gaji-dashboard/{{ $gaji->id_gaji }}/edit" class="btn btn-warning"><i
                                                class="fas fa-pencil-alt"></i> </a>
                                        <form class="d-inline" action="/gaji-dashboard/{{ $gaji->id_gaji }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ?')"><i
                                                    class="fas fa-trash-alt"></i> </button>
                                        </form>
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
