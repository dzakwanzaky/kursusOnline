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
            $table->biginteger('id_jadwal')->unsigned();
            $table->string('tanggal')->nullable();
            $table->string('waktu_mulai')->nullable();
            $table->string('waktu_selesai')->nullable();
            $table->string('kehadiran')->nullable();
            $table->string('materi')->nullable();
            $table->string('report')->nullable();
            $table->timestamps();
            $table->foreign('id_jadwal')->unsigned()->references('id')->on('model_jadwals')->onDelete('cascade');

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
