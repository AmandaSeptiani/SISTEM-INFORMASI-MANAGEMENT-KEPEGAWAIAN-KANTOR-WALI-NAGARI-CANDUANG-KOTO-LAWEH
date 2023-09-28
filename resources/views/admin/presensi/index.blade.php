@extends('admin.layout.main')

@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">ABSENSI PEGAWAI</h1>
                        </div>


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
                                    <th class="text-center align-middle">Tanggal</th>
                                    <th class="text-center align-middle">Jam Masuk</th>
                                    <th class="text-center align-middle">Foto Masuk</th>
                                    <th class="text-center align-middle">Jam Keluar</th>
                                    <th class="text-center align-middle">Foto Keluar</th>
                                    <th class="text-center align-middle">Status</th>
                                    <th class="text-center align-middle">Action</th>
                                <tr>
                            </thead>
                            @foreach ($presensis as $presensi)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $presensi->nip_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $presensi->nama_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $presensi->tanggal }}</td>
                                    <td class="text-center align-middle">{{ $presensi->jam_masuk }}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ asset('storage/' . $presensi->foto_masuk) }}" alt=""
                                            width="100px;">
                                    </td>
                                    <td class="text-center align-middle">{{ $presensi->jam_keluar ?? '-' }}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ asset('storage/' . $presensi->foto_keluar) }}" alt=""
                                            width="100px;">
                                    </td>
                                    <td class="text-center align-middle">{{ $presensi->status }}</td>
                                    <td class="text-center align-middle">
                                        <form action="{{ route('presensi-dashboard.destroy', $presensi->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                onclick="return confirm('Apakah anda yakin hapus data ini ?')"
                                                title="Hapus" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
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
