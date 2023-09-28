<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->increments('id_gaji');
            $table->foreignId('pegawai_id');
            $table->date('tanggal');
            $table->string('gaji_pokok');
            $table->string('tunjangan');
            $table->string('thr')->nullable();
            $table->string('premi_bpjs');
            $table->string('premi_bpjstk');
            $table->string('total');
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
        Schema::dropIfExists('gajis');
    }
}
