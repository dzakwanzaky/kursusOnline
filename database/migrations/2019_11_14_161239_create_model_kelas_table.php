<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_kelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_program')->unsigned();
            $table->string('kelas', '15');
            $table->timestamps();
            $table->foreign('id_program')->unsigned()->references('id')->on('model_programs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_kelas');
    }
}
