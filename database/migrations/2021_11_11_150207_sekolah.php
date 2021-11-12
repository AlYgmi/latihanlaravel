<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            // $table->id();
            $table->string('gambar');
            $table->string('nama');
            $table->integer('npsn');
            $table->primary('npsn');
            $table->string('alamat');
            $table->integer('kodepos');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('status');
            $table->string('waktu');
            $table->string('jenjang');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
            $table->string('telp');
            $table->integer('operator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolah');
    }
}
