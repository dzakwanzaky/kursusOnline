<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_paket');
            $table->string('program');
            $table->string('jumlah_mapel');
            $table->string('jumlah_pertemuan');
            $table->string('harga');
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
        Schema::dropIfExists('model_pakets');
    }
}
