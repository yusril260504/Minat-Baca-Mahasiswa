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
        Schema::create('minat_bacas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nama_perguruan_tinggi');
            $table->string('jurusan');
            $table->string('semester');
            $table->string('genre_buku_yang_sering_dibaca');
            $table->string('jumlah_buku_yang_sering_dibaca_dalam_1bulan');
            $table->string('alasan_membaca_buku');
            $table->string('tempat_membaca_buku');
            $table->string('durasi_membaca_buku_perhari');
            $table->string('tingkat_kegemaran_baca_buku');
            $table->timestamps(); // Kolom created_at dan updated_at otomatis ditambahkan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
