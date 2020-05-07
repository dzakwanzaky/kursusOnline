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
            $table->biginteger('invoice_id')->unsigned();
            $table->biginteger('murid_id')->unsigned();
            $table->biginteger('tutor_id')->nullable()->unsigned();
            $table->biginteger('mapel_id')->nullable()->unsigned();
            $table->string('hari1', '15');
            $table->string('waktu_hari1', '15');
            $table->string('hari2', '15')->nullable();
            $table->string('waktu_hari2', '15')->nullable();;
            $table->enum('status', ['MENUNGGU', 'DIPILIH TUTOR', 'AKTIF', 'TIDAK AKTIF'])->nullable();
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('model_invoice')->onDelete('cascade');
            $table->foreign('murid_id')->references('id')->on('model_siswas')->onDelete('cascade');
            $table->foreign('mapel_id')->references('id')->on('model_mapels')->onDelete('cascade');
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
