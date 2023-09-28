@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">DATA PEGAWAI</h1>
                        </div>

                        <div class="row">
                            <div class="col-lg-10"></div>
                            <div class="col-lg-2">
                                <a href="/printpegawai" class="btn btn-success my-2 mb-3 text-right"
                                    style="padding: 10px 20px; font-size: 15px;">
                                    <i class="bi bi-printer-fill"></i> Print Data Pegawai
                                </a>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">No</th>
                                    <th class="text-center align-middle">Foto</th>
                                    <th class="text-center align-middle">Nama Pegawai</th>
                                    <th class="text-center align-middle">Jenis Kelamin</th>
                                    <th class="text-center align-middle">Jabatan</th>
                                    <th class="text-center align-middle">Telp</th>
                                    <th class="text-center align-middle">Alamat</th>
                                    <th class="text-center align-middle">Action</th>
                                <tr>
                            </thead>
                            @foreach ($pegawais as $pegawai)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="" width="80">
                                    </td>
                                    <td class="text-center align-middle">{{ $pegawai->nama_pegawai }}</td>
                                    <td class="text-center align-middle">{{ $pegawai->jenis_kelamin }}</td>
                                    <td class="text-center align-middle">{{ $pegawai->jabatan }}</td>
                                    <td class="text-center align-middle">{{ $pegawai->telp }}</td>
                                    <td class="text-center align-middle">{{ $pegawai->alamat }}</td>
                                    <td class="text-center align-middle">
                                        <div class="d-flex">
                                            <a href="{{ route('admin-pegawai.show', $pegawai->nip_pegawai) }}"
                                                title="Detail" class="btn btn-primary me-2">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <form action="{{ route('admin-pegawai.destroy', $pegawai->nip_pegawai) }}"
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
