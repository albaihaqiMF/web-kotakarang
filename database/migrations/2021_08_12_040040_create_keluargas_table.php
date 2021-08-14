<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kk')->unique();
            $table->string('no_surat')->nullable();
            $table->string('kepala_keluarga')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->integer('kelurahan')->nullable();
            $table->integer('kecamatan')->nullable();
            $table->integer('kabupaten')->nullable();
            $table->integer('provinsi')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->date('tanggal_keluar')->nullable();
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
        Schema::dropIfExists('keluargas');
    }
}
