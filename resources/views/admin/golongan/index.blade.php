@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">DATA GOLONGAN PEGAWAI</h1>
                        </div>

                        <a href="{{ route('golongan-dashboard.create') }}" class="btn btn-success my-2 mb-3"
                            style="padding: 10px 20px; font-size: 15px;">
                            <i class="bi bi-plus-square mx-2"></i> Create Golongan
                        </a>

                        @if (session()->has('pesan'))
                            <div class="alert alert-success" role="alert">
                                {{ session('pesan') }}
                            </div>
                        @endif

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Golongan</th>
                                    <th scope="col">Nama Golongan</th>
                                    <th scope="col">Besar Gaji</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($golongans as $golongan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $golongan->nama_golongan }}</td>
                                    <td>{{ $golongan->jenis_golongan }}</td>
                                    <td>{{ $golongan->besar_gaji }}</td>
                                    <td>
                                        <a href="/golongan-dashboard/{{ $golongan->id }}/edit" class="btn btn-warning"><i
                                                class="fas fa-pencil-alt"></i> </a>
                                        <form class="d-inline" action="/golongan-dashboard/{{ $golongan->id }}"
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

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
