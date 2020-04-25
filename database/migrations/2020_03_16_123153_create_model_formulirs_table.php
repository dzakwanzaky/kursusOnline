<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_formulirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namalengkap');
            $table->string('notelp');
            $table->string('asalsekolah')->nullable();
            $table->string('kategori')->nullable();
            $table->string('email');
            $table->string('file');
            $table->enum('status', ['AKTIF', 'BELUM AKTIF']);
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
        Schema::dropIfExists('model_formulirs');
    }
}
