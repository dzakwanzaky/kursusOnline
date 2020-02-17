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
            $table->string('id');
            $table->string('nama_tutor');
            $table->string('jenis_kelamin');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('pendidikan');
            $table->string('kelas1')->nullable();
            $table->string('kelas2')->nullable();
            $table->string('kelas3')->nullable();
            $table->string('kelas4')->nullable();
            $table->string('kelas5')->nullable();
            $table->string('kelas6')->nullable();
            $table->string('mata_pelajaran1')->nullable();
            $table->string('mata_pelajaran2')->nullable();
            $table->string('mata_pelajaran3')->nullable();
            $table->string('mata_pelajaran4')->nullable();
            $table->string('mata_pelajaran5')->nullable();
            $table->string('mata_pelajaran6')->nullable();
            $table->string('mata_pelajaran7')->nullable();
            $table->string('mata_pelajaran8')->nullable();
            $table->string('mata_pelajaran9')->nullable();
            $table->string('file');
            $table->string('foto')->nulable();
            $table->string('status');
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
        Schema::dropIfExists('model_tutors');
    }
}
