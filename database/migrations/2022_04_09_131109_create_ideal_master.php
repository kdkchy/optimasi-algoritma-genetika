<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdealMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideal_master', function (Blueprint $table) {
            $table->id();
            $table->integer('bidang_keahlian');
            $table->integer('pendidikan_terakhir');
            $table->integer('mahasiswa_lulus');
            $table->integer('ketersediaan_waktu');
            $table->integer('gender');
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
        Schema::dropIfExists('ideal_master');
    }
}
