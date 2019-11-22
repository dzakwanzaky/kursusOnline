<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_jadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelas');
            $table->string('program');
            $table->string('mata_pelajaran');
            $table->string('waktu');
            $table->string('lokasi');
            $table->string('hari');
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
        Schema::dropIfExists('model_jadwals');
    }
}
