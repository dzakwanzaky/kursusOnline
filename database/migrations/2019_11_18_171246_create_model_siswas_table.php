<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_siswas', function (Blueprint $table) {
            $table->biginteger('id')->primary()->unsigned();
            $table->string('file');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tanggal_lahir', '30');
            $table->string('provinsi', '30');
            $table->string('kabupaten', '30');
            $table->string('kecamatan', '30');
            $table->string('alamat_detail');
            $table->enum('status', ['BELUM AKTIF', 'AKTIF', 'TIDAK AKTIF']);
            $table->timestamps();
            $table->foreign('id')->primary()->unsigned()->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_siswas');
    }
}
