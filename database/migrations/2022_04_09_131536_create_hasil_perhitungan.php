<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPerhitungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_perhitungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_pembimbing_id')->references('id')->on('dosen_pembimbings');
            $table->float('akademik_ncf');
            $table->float('akademik_nsf');
            $table->float('non_akademik_ncf');
            $table->float('non_akademik_nsf');
            $table->float('n1');
            $table->float('n2');
            $table->float('rank');
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
        Schema::dropIfExists('hasil_perhitungan');
    }
}
