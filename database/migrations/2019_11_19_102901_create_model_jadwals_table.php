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
            $table->string('murid_id');
            $table->string('nama_murid');
            $table->string('tutor_id')->nullable();
            $table->string('nama_tutor')->nullable();
            $table->string('program');            
            $table->string('kelas');
            $table->string('mata_pelajaran');
            $table->string('hari1');
            $table->string('hari2')->nullable();
            $table->string('hari3')->nullable();
            $table->string('waktu');
            $table->string('status')->nullable();
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
