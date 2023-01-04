<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalPengganti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pengganti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peserta_id')->references('id')->on('persons');
            $table->foreignId('narsum_id')->references('id')->on('persons');
            $table->foreignId('narsum_nd_id')->references('id')->on('persons');
            $table->foreignId('pembimbing_id')->references('id')->on('persons');
            $table->string('fitness');
            $table->string('hari_jam');
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
        Schema::dropIfExists('jadwal_pengganti');
    }
}
