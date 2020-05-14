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
            $table->string('tanggal_lahir', '30');
            $table->string('provinsi', '30');
            $table->string('kabupaten', '30');
            $table->string('kecamatan', '30');
            $table->string('alamat_detail');
            $table->string('pendidikan', '15');
            $table->json('program_id')->nullable();
            $table->json('kelas_id')->nullable();
            $table->json('mapel_id')->nullable();
            $table->string('file');
            $table->string('foto')->nullable();
            $table->enum('status', ['MENUNGGU', 'AKTIF', 'TIDAK AKTIF']);
            $table->timestamps();
            $table->foreign('id')->primary()->references('id')->on('users')->onDelete('cascade');
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
