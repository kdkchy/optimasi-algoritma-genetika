<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terjadwalkan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terjadwalkan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_ujian_id')->references('id')->on('status_ujian');
            $table->foreignId('peserta_id')->references('id')->on('persons');
            $table->foreignId('pembimbing_id')->references('id')->on('persons');
            $table->foreignId('narsum_id')->references('id')->on('persons');
            $table->foreignId('narsum_nd_id')->references('id')->on('persons');
            $table->string('hari_jam');
            $table->foreignId('ruangan_id')->references('id')->on('ruangan');
            $table->string('judul');
            $table->date('tanggal');
            $table->integer('terlaksana')->nullable();
            $table->string('generated_id');
            $table->softDeletes();
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
        Schema::dropIfExists('terjadwalkan');
    }
}
