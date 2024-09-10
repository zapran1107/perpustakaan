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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_penulis');
            $table->unsignedBigInteger('id_penerbit');
            $table->unsignedBigInteger('id_kategori');
            $table->date('tahun_terbit');
            $table->string('foto');
            $table->string('sinopsis');
            $table->timestamps();

            // $table->foreign('id_penulis')->references('id')->on('penulis')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
