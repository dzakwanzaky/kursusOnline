<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_absens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_jadwal');
            $table->string('tanggal');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->string('kehadiran');
            $table->string('report');
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
        Schema::dropIfExists('model_absens');
    }
}
