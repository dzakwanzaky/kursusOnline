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
            $table->biginteger('id')->primary()->unsigned();
            $table->enum('jenis_kelamin',['Laki-Laki', 'Perempuan']);
            $table->string('provinsi', '30');
            $table->string('kabupaten', '30');
            $table->string('kecamatan', '30');
            $table->string('pendidikan', '15');
            $table->biginteger('program_id')->unsigned();
            $table->json('kelas_id')->nullable();
            $table->json('mapel_id')->nullable();
            $table->string('file');
            $table->string('foto')->nullable();
            $table->enum('status', ['MENUNGGU', 'AKTIF']);
            $table->timestamps();
            $table->foreign('id')->primary()->references('id')->on('users')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('model_programs')->onDelete('cascade');

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
