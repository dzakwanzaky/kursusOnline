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
            $table->biginteger('kelas_id')->nullable()->unsigned();
            $table->biginteger('paket_id')->nullable()->unsigned();
            $table->enum('kategori', ['OFFLINE', 'ONLINE'])->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
            $table->foreign('id_murid')->unsigned()->references('id')->on('model_siswas')->onDelete('cascade');
            $table->foreign('program_id')->unsigned()->references('id')->on('model_programs')->onDelete('cascade');
            $table->foreign('kelas_id')->unsigned()->references('id')->on('model_kelas')->onDelete('cascade');
            $table->foreign('paket_id')->unsigned()->references('id')->on('model_pakets')->onDelete('cascade');


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
