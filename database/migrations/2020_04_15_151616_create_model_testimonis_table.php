<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelTestimonisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_testimonis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('murid_id')->unsigned();
            $table->string('isi');
            $table->timestamps();
            $table->foreign('murid_id')->unsigned()->references('id')->on('model_siswas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_testimonis');
    }
}
