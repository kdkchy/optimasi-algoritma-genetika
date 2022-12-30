<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdAndRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hasil_perhitungan', function (Blueprint $table) {
            $table->string('bidang_keahlian');
            $table->string('gender');
            $table->string('pendidikan_terakhir');
            $table->string('ketersediaan_waktu');

            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hasil_perhitungan', function (Blueprint $table) {
            $table->string('bidang_keahlian');
            $table->string('gender');
            $table->string('pendidikan_terakhir');
            $table->string('ketersediaan_waktu');
            $table->foreignId('user_id');
        });
    }
}
