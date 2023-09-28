@extends('admin.layout.main')
@section('container')
    <section class="section my-4">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="pb-2 mb-3 border-bottom text-center">
                            <h1 class="mt-4 text-center">PRESENSI PEGAWAI</h1>
                        </div>

                        <form action="{{ route('presensi.update', $presensis->id) }}" method="post"
                            enctype="multipart/form-data" class="mx-5 mt-4">
                            @method('PUT')
                            @csrf


                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nip</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $pegawais->nip_pegawai ?? '-' }}">
                                    <input type="text" class="form-control" name="pegawai_id"
                                        value="{{ $pegawais->id_pegawai ?? '-' }}" hidden>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Nama</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama_pegawai"
                                        value="{{ $pegawais->nama_pegawai ?? '-' }}">
                                </div>
                            </div>
                            @error('nama_pegawai')
                                {{ $message }}
                            @enderror

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><b>Jam Keluar</b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jam_keluar"
                                        value="{{ \Carbon\Carbon::now()->formatLocalized('%H:%M:%S') }}" readonly>
                                </div>
                            </div>
                            @error('jam_keluar')
                                {{ $message }}
                            @enderror
                            <input type="file" id="imageInput" name="foto_keluar" class="form-control"
                                style="display: none;" accept="image/*">

                            <div class="row">
                                <div class="col-lg-10"></div>
                                <div class="col-lg-2">
                                    <div class="mb-3 text-right">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-success my-2 mb-3"
                                            style="padding: 10px 20px; font-size: 15px;"><i
                                                class="bi bi-box-arrow-in-right"></i>
                                            Clock Out</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="form-group text-center">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg">
                                    <div class="card shadow py-3 px-3 text-center" style="width: 40rem">
                                        <video id="camera" autoplay></video>
                                        <div class="form-group mt-3">
                                            <button id="captureButton" class="btn btn-success">Ambil Gambar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card shadow py-3 px-3 text-center">
                                        <canvas id="canvas" style="display: none;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Mengakses kamera dan menampilkan video
                            navigator.mediaDevices.getUserMedia({
                                    video: true
                                })
                                .then(function(stream) {
                                    const videoElement = document.getElementById('camera');
                                    videoElement.srcObject = stream;
                                    videoElement.play();
                                })
                                .catch(function(error) {
                                    console.error('Gagal mengakses kamera:', error);
                                });

                            // Mengambil gambar dari video dan menampilkannya di canvas
                            const captureButton = document.getElementById('captureButton');
                            const canvasElement = document.getElementById('canvas');
                            const context = canvasElement.getContext('2d');
                            const videoElement = document.getElementById('camera');
                            const imageInput = document.getElementById("imageInput");

                            captureButton.addEventListener('click', function() {
                                context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
                                canvasElement.style.display = 'block';

                                // Mengambil gambar dari canvas dan mengubahnya menjadi file
                                canvasElement.toBlob(function(blob) {
                                    const file = new File([blob], "foto.png", {
                                        type: "image/png"
                                    });

                                    // Mengisi input file dengan file yang diambil dari kamera
                                    const imageInput = document.getElementById("imageInput");
                                    const imageFileList = new DataTransfer();
                                    imageFileList.items.add(file);
                                    imageInput.files = imageFileList.files;
                                }, 'image/png');
                            });
                        </script>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
