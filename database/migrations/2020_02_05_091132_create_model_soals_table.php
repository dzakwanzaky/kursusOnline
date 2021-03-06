<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_soals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_to')->unsigned();
            $table->integer('nomor_soal');
            $table->string('file')->nullable();
            $table->string('soal');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->string('option_e');
            $table->enum('jawaban',  ['A', 'B', 'C', 'D', 'E']);
            $table->string('pembahasan');
            $table->timestamps();
            $table->foreign('id_to')->unsigned()->references('id')->on('model_tryouts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_soals');
    }
}
