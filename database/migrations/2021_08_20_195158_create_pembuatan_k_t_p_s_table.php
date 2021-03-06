<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembuatanKTPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuatan_k_t_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama',63);
            $table->bigInteger('nik')->unique();
            $table->bigInteger('kk');
            $table->longText('alamat');
            $table->string('no_hp',15);
            $table->integer('status')->default(0);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('pembuatan_k_t_p_s');
    }
}
