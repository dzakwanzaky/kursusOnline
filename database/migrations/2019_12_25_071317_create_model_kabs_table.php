<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelKabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_kabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provinsi_id');
            $table->string('kabupaten_kota');
            $table->string('ibu_kota');
            $table->string('k_bsni');
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
        Schema::dropIfExists('model_kabs');
    }
}
