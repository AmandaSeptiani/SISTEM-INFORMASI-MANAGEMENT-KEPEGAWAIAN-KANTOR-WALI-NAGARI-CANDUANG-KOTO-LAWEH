@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">DATA CUTI/IZIN PEGAWAI</h1>
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
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
                                    <td>{{ $cuti->status }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="/update-setuju" method="POST" class="me-2">
                                                @csrf
                                                <button type="submit" class="btn btn-success"><i
                                                        class="fa-solid fa-check"></i></button>
                                                <input type="text" name="id_cuti" class="form-control"
                                                    value="{{ $cuti->id_cuti }}" hidden>
                                            </form>

                                            <form action="/update-tidaksetujui" method="POST" class="me-2">
                                                @csrf
                                                <button type="submit" class="btn btn-warning"><i
                                                        class="fa-solid fa-xmark"></i></button>
                                                <input type="text" name="id_cuti" class="form-control"
                                                    value="{{ $cuti->id_cuti }}" hidden>
                                            </form>

                                            <form action="{{ route('cuti-dashboard.destroy', $cuti->id_cuti) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    onclick="return confirm('Apakah anda yakin hapus data ini ?')"
                                                    title="Hapus" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>

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
