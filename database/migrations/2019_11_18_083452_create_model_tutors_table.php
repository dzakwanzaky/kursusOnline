<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_tutors', function (Blueprint $table) {
            $table->string('id');
            $table->string('nama_tutor');
            $table->string('jenis_kelamin');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('status');
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
        Schema::dropIfExists('model_tutors');
    }
}