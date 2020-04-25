<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelTryoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_tryouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('mapel_id')->unsigned();
            $table->biginteger('program_id')->unsigned();
            $table->string('nama');
            $table->string('jumlah_soal');
            $table->timestamps();
            $table->foreign('mapel_id')->unsigned()->references('id')->on('model_mapels')->onDelete('cascade');
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
        Schema::dropIfExists('model_tryouts');
    }
}
