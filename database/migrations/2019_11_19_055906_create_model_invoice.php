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
            $table->biginteger('id_murid')->unsigned();
            $table->biginteger('program_id')->unsigned();
            $table->string('kategori', '15');
            $table->biginteger('kelas_id')->nullable()->unsigned();
            $table->integer('jumlah_sesi');
            $table->integer('jumlah_mapel');
            $table->string('harga')->nullable();            
            $table->string('file')->nullable();
            $table->timestamps();
            $table->foreign('id_murid')->unsigned()->references('id')->on('model_siswas')->onDelete('cascade');
            $table->foreign('program_id')->unsigned()->references('id')->on('model_programs')->onDelete('cascade');
            $table->foreign('kelas_id')->unsigned()->references('id')->on('model_kelas')->onDelete('cascade');

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
