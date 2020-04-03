<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('program');
            $table->string('fasilitas');
            $table->string('durasi');
            $table->string('jumlah_pertemuan');
            $table->string('harga');
            $table->string('keterangan');
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
        Schema::dropIfExists('model_programs');
    }
}
