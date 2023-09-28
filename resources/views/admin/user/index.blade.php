@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">DATA USER</h1>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telp }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
