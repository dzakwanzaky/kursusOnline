<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_kecamatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('kab_id')->unsigned();
            $table->string('kecamatan');
            $table->timestamps();
            $table->foreign('kab_id')->unsigned()->references('id')->on('model_kabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_kecamatans');
    }
}
