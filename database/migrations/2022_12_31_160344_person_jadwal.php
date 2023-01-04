<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->references('id')->on('persons');
            $table->integer('status');
            $table->integer('hari');
            $table->integer('jam');
            $table->integer('hari_jam');
            $table->string('desk_kegiatan')->nullable();
            $table->foreignId('status_kepesertaan_id')->nullable()->constrained()->references('id')->on('status_kepesertaan');
            $table->foreignId('status_ujian_id')->nullable()->constrained()->references('id')->on('status_ujian');
            $table->integer('dinas');
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
        Schema::dropIfExists('person_jadwal');
    }
}
