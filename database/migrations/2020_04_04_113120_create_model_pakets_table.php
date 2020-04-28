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
            $table->biginteger('program_id')->unsigned();
            $table->string('kategori');
            $table->integer('jumlah_mapel');
            $table->integer('jumlah_pertemuan');
            $table->string('harga');
            $table->timestamps();
            $table->foreign('program_id')->unsigned()->references('id')->on('model_programs')->onDelete('cascade');
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
