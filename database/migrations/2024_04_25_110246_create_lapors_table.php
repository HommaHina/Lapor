<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapors', function (Blueprint $table) {
            $table->increments('id_lapor');
            $table->string('judul_laporan');
            $table->longText('isi_laporan');
            $table->string('klasifikasi');
            $table->string('kategori');
            $table->integer('disposisi')->unsigned()->comment('id_sopd');
            $table->date('tanggal_masuk');
            $table->date('tanggal_disposisi');
            $table->date('tanggal_tindak_lanjut');
            $table->date('tanggal_batas');
            $table->string('berkas');

            $table->foreign('disposisi')->references('id_sopd')->on('sopds')->onDelete('cascade');
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
        Schema::dropIfExists('lapors');
    }
};
