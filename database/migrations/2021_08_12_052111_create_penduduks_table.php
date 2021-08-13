<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('NIK', 16)->unique();
            $table->string('jenis_kelamin', 8);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama', 8);
            $table->string('pendidikan', 8);
            $table->string('jenis_pekerjaan', 8);
            $table->string('status_pernikahan', 8);
            $table->string('hubungan_keluarga');
            $table->string('kewarganegaraan', 8);
            $table->string('no_paspor')->unique()->nullable();
            $table->string('no_kitas')->unique()->nullable();
            $table->string('nama_ayah');
            $table->string('nama_ibu');

            //---ADDRESS---//
            $table->longText('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->integer('kode_pos')->nullable();
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
        Schema::dropIfExists('penduduks');
    }
}
