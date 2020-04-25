<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_mapels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_program')->unsigned();
            $table->string('mapel');
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
        Schema::dropIfExists('model_mapels');
    }
}
