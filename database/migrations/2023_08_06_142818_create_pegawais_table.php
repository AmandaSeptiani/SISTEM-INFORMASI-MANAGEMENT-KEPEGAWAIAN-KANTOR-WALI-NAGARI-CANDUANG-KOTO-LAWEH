<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id_pegawai');
            $table->foreignId('users_id');
            $table->foreignId('golongan_id');
            $table->char('nip_pegawai',20)->unique();
            $table->string('nama_pegawai');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_pegawai');
            $table->string('email');
            $table->string('telp');
            $table->string('foto');
            $table->string('jabatan');
            $table->integer('npwp');
            $table->string('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('status_nikah');
            $table->string('agama');
            $table->integer('nik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
