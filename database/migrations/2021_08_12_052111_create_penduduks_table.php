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
            $table->bigInteger('nik')->unique();
            $table->string('no_kk')->nullable();
            $table->string('jenis_kelamin', 8);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama', 8);
            $table->string('pendidikan', 8);
            $table->string('jenis_pekerjaan', 8);
            $table->string('status_pernikahan', 8);
            $table->string('hubungan_keluarga')->nullable();
            $table->string('kewarganegaraan', 8);
            $table->string('no_paspor',63)->nullable();
            $table->string('no_kitas',63)->nullable();
            $table->string('nama_ayah',63);
            $table->string('nama_ibu',63);
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
