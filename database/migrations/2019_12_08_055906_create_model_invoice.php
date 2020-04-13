<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice');
            $table->string('id_murid');
            $table->string('program_id');
            $table->string('kategori');
            $table->string('kelas_id')->nullable();
            $table->string('jumlah_sesi');
            $table->string('jumlah_mapel');
            $table->string('harga')->nullable();            
            $table->string('file')->nullable();
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
        Schema::dropIfExists('model_invoice');
    }
}
